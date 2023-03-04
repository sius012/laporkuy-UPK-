<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\PetugasLapangan;
use Illuminate\Support\Facades\DB;

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
        }])->where("status","Ke Petugas")->get();
        $pengaduan['proses'] = Pengaduan::with("lampiran")->with(["penugasan.petugas_lapangan"=> function($q){
            $q->where("id_petugas", 4);
        }])->where("status","Diproses")->get();
        $pengaduan['ditunda'] =  Pengaduan::with("lampiran")->with(["penugasan.petugas_lapangan"=> function($q){
            $q->where("id_petugas", 4);
        }])->where("status","Ditunda")->get();
        $pengaduan['selesai'] =  Pengaduan::with("lampiran")->with(["penugasan.petugas_lapangan"=> function($q){
            $q->where("id_petugas", 4);
        }])->where("status","Selesai")->get();

        return view('petugas.tugassaya', ["pengaduan"=>$pengaduan]);
    }


    public function konfirmasiselesai(Request $req){

        $this->validate($req, [
            'lampiran' => "required|array|min:3",
            'lampiran.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        DB::beginTransaction();

        t
        



    }
}
