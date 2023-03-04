<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetugasController extends Controller
{
    public function riwayattugas(Request $req){
        $riwayat = Pengaduan::with("jenis")->with(["penugasan.petugas_lapangan"=>function($q){
          $q->where("id_petugas",  Auth::user()->id);})->get();
        return view("petugas.riwayattugas", ["riwayat"=>$riwayat]);
    }
}
