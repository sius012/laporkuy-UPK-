<?php

namespace App\Http\Controllers\Masyarakat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\PengaduanController;
use App\Models\JenisPengaduan;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Auth;

class MasyarakatController extends Controller
{
    public function index(Request $req){
        $jp = JenisPengaduan::all();
        return view("welcome", ["jenispengaduan"=>$jp]);
    }

    public function buatpengaduan(Request $req){
       $pengaduan = new PengaduanController;
       $pengaduan->tambah($req);

       return redirect()->route("pengaduan.list.user");
    }


    public function pengaduansaya(Request $req){
        $id_pelapor = Auth::user()->id;
        $jp = JenisPengaduan::all();
        $pengaduan = new 
       // dd($pengaduan);
        return view("masyarakat.laporansaya", ["transparent"=>false, "pengaduan"=>$pengaduan, "jenis_pengaduan"=>$jp]);
    }
}
