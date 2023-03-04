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

        $query = Pengaduan::with("lampiran")->with(["penugasan.petugas_lapangan"=> function($q){
            $q->where("id_petugas", 4);
        }]);

        $pengaduan['masuk'] = Pengaduan::with("lampiran")->with(["penugasan.petugas_lapangan"=> function($q){
            $q->where("id_petugas", 4);
        }])->where("status","Ke Petugas");
        $pengaduan['proses'] = Pengaduan::with("lampiran")->with(["penugasan.petugas_lapangan"=> function($q){
            $q->where("id_petugas", 4);
        }])->where("status","Diproses");
        $pengaduan['ditunda'] = $query->where('status',"Ditunda")->get();
        $pengaduan['selesai'] = $query->where('status',"Selesai")->get();

        return view('petugas.tugassaya', ["pengaduan"=>$pengaduan]);
    }
}
