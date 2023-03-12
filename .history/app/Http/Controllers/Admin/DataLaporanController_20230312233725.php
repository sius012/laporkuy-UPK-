<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\PengaduanController as PC;
use App\Http\Controllers\Controller;
use App\Models\JenisPengaduan;
use App\Models\Pengaduan;
use Illuminate\Support\Carbon;

class DataLaporanController extends Controller
{
    public function __construct(){

    }
    public function index(Request $req){
        $jenis = JenisPengaduan::all();

        $pengaduan = new Pengaduan();

        $pengaduan = $pengaduan->with('pelapor')->with('penugasan.tanggapan.sender')->with('penugasan.petugas_lapangan.petugas');
        
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
            $status = explode(":",$req->status);
          //  dd($status);
             $pengaduan = $pengaduan->whereIn("status", $status);
          }

          if($req->filled("urutan")){
        
            $pengaduan = $pengaduan->orderBy("tanggal", $req->urutan == "Terbaru" ? "desc" : "asc");
         }
    
        return view("Admin.dataLaporan.index", ["jenis_pengaduan"=>$jenis,"pengaduan"=>$pengaduan->get()]);
    }
}
