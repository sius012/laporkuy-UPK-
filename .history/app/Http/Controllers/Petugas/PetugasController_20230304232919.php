<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function riwayattugas(Request $req){
        $riwayat = Pengaduan::where("")
        return view("petugas.riwayattugas");
    }
}
