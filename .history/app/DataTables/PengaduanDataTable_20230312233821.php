<?php

namespace App\DataTables;

use App\Models\Pengaduan;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PengaduanDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public $judul = "";
    public $id_jp = "";
    public $status = "";
    public $dari = "";
    public $sampai = "";

    function __construct(){
        parent::__construct();

  

    }

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'pengaduan.action')
            ->addColumn('Pelapor',  function($e){
                return $e->pelapor->name;
            })
            ->addColumn('Jenis Pengaduan',  function($e){
                return $e->jenis->jenis;
            })
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Pengaduan $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Pengaduan $model): QueryBuilder
    {   
        $pengaduan = $model->with("jenis")->with('pelapor')->newQuery();



        if(strlen($this->judul) > 0){
            $pengaduan = $pengaduan->where("judul_pengaduan","LIKE","%".$this->judul."%");
         }
 
         if(strlen($this->id_jp) > 0){
             $pengaduan = $pengaduan->where('id_jp', $this->id_jp);
         }
 
         if(strlen($this->dari) > 0 and strlen($this->sampai)){
             $pengaduan = $pengaduan->whereBetween("tanggal",[$this->dari." ".Carbon::now()->format('H:i:s'), $this->sampai." ".Carbon::now()->format('H:i:s')]);
         }
 
         if(strlen($this->status)){
             $pengaduan = $pengaduan->where("status", $this->status);
          }
 


        return $pengaduan->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('pengaduan-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->parameters([
                        'dom'          => 'Bfrtip',
                        'buttons'      => ['export', 'print', 'reset', 'reload'],
                    ])->searching(false)
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [
            Column::make('id_pengaduan'),
            Column::computed('tanggal'),
            Column::computed('Jenis Pengaduan'),
            Column::computed('Pelapor'),
            Column::make('judul_pengaduan'),
            Column::make('keterangan'),
            Column::computed('status')

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Pengaduan_' . date('YmdHis');
    }
}
