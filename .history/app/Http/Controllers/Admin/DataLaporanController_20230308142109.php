<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\PengaduanController as PC;
use App\Http\Controllers\Controller;
use App\Models\JenisPengaduan;
use App\Models\Pengaduan;

class DataLaporanController extends Controller
{
    public function __construct(){

    }
    public function index(Request $req){
        $jenis = JenisPengaduan::all();

        $pengaduan = new Pengaduan()
        
        if($req->filled('judul')){
            $pengaduan = $pengaduan->where("judul_pengaduan","LIKE","%".$req->judul."%");
         }
 
         if($req->filled('jp')){
             $pengaduan = $pengaduan->where('id_jp', $req->jp);
         }
 
         if($req->filled('dari') and $req->filled('sampai')){
             $pengaduan = $pengaduan->whereBetween("tanggal",[$req->dari." ".Carbon::now()->format('H:i:s'), $req->sampai." ".Carbon::now()->format('H:i:s')]);
         }
 
         if($req->filled("status")){
             $pengaduan = $pengaduan->where("status", $req->status);
          }
        $pengaduan = PC::ambilSemua();

    
        return view("Admin.dataLaporan.index", ["jenis_pengaduan"=>$jenis,"pengaduan"=>$pengaduan]);
    }
}