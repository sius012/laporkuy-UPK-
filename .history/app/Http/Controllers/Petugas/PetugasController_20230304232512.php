<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function riwayattugas(Request $req){
        return view("petugas.tugassaya");
    }
}
