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
    }


    public function pengaduansaya(Request $req){
        $id_pelapor = Auth::user()->id;
        $pengaduan = Pengaduan::where("id_pelapor", $id_pelapor)->with('penugasan.tanggapan')->get();
        dd($pengaduan);
        return view("masyarakat.laporansaya", ["transparent"=>false, "pengaduan"=>$pengaduan]);
    }
}
