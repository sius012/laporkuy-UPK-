<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetugasController extends Controller
{
    public function riwayattugas(Request $req){
        $riwayat = Pengaduan::with()->with(["pengaduan.petugas_lapangan"=>Auth::user()->id]);
        return view("petugas.riwayattugas", ["riwayat"=>$riwayat]);
    }
}