<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\PengaduanDataTable;
use App\Models\JenisPengaduan;
class CetakLaporanController extends Controller
{
    public function index(Request $req,PengaduanDataTable $dataTable){
        

        $dataTable->judul = $req->judul;
        $dataTable->id_jp = $req->jp;
        $dataTable->status = $req->status;
        $dataTable->dari =$req->dari;
        $dataTable->sampai = $req->sampai;

        $jenispengaduan = JenisPengaduan::all();

        return $dataTable->render('admin.cetaklaporan.index', ["jenis_pengaduan"=>$jenispengaduan]);
    }
}
