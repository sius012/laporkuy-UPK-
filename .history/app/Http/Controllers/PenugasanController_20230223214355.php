<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\PetugasLapangan;

use Auth;
class PenugasanController extends Controller
{
    public function tugassaya(){
        $var = PetugasLapangan::where("id_petugas", 4)->get();

        $pengaduan['masuk'] = PengaduanController::with(["penugasan.petugas_lapangan"=> function($q){
            $q->where("id_petugas", 4);
        }]);

        dd($pengaduan);
    //    $tugas["diproses"] = 

      //  dd($var);
        return view('petugas.tugassaya');
    }
}
