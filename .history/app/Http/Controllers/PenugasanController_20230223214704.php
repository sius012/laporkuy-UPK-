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

        $query = Pengaduan::with(["penugasan.petugas_lapangan"=> function($q){
            $q->where("id_petugas", 4);
        }]);

        $pengaduan['masuk'] = $query->where('status',"Ke Petugas")->get();
        $pengaduan['proses'] = $query->where('status',"Ke Petugas")->get();
        $pengaduan['ditunda'] = $query->where('status',"Ke Petugas")->get();
        $pengaduan['selesai'] = $query->where('status',"Seleisa")->get();
        dd($pengaduan);
    //    $tugas["diproses"] = 

      //  dd($var);
        return view('petugas.tugassaya');
    }
}
