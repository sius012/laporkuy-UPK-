<?php

namespace App\Http\Controllers\Masyarakat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\PengaduanController;
use App\Models\JenisPengaduan;

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


    public function pengaduansaya()
}
