<?php

namespace App\Http\Controllers\Masyarakat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\PengaduanController;
use App\Models\JenisPengaduan;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class MasyarakatController extends Controller
{
    public function index(Request $req){
        $jp = JenisPengaduan::where("status", "Aktif")->get();
        return view("welcome", ["jenispengaduan"=>$jp]);
    }

    public function buatpengaduan(Request $req){
      //  dd($req);
       $pengaduan = new PengaduanController;
       $pengaduan->tambah($req);

       return redirect()->route("pengaduan.list.user");
    }


    public function pengaduansaya(Request $req){
        $id_pelapor = Auth::user()->id;
        $jp = JenisPengaduan::all();
        $pengaduan = new Pengaduan();
        $pengaduan = $pengaduan->where("id_pelapor", $id_pelapor)->with('pelapor')->with('penugasan.tanggapan.sender')->with('penugasan.petugas_lapangan.petugas')->orderBy("tanggal", "desc")->with('log.user');

        if($req->filled('judul')){
           $pengaduan = $pengaduan->where("judul_pengaduan","LIKE","%".$req->judul."%");
        }

        if($req->filled('jp')){
            $pengaduan = $pengaduan->where('id_jp', $req->jp);
        }

        if($req->filled('dari') and $req->filled('sampai')){
            $pengaduan = $pengaduan->whereBetween("tanggal",[$req->dari." ".Carbon::now()->format('H:i:s'), $req->sampai." ".Carbon::now()->format('H:i:s')]);
        }


       // dd($pengaduan);
        return view("masyarakat.laporansaya", ["transparent"=>false, "pengaduan"=>$pengaduan->get(), "jenis_pengaduan"=>$jp]);
    }


    public function jelajahiaduan(Request $req){
        $pengaduan = new Pengaduan();
        $pengaduan = $pengaduan->with('pelapor')->with('penugasan.tanggapan.sender')->with('penugasan.petugas_lapangan.petugas')->orderBy("tanggal", "desc")->with('log.user');


        return view("masyarakat.jelajahiaduan")
    }
}
