<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\PetugasLapangan;
use Illuminate\Support\Facades\DB;
use App\Models\Lampiran;
use App\Models\ChangeLog;

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


        $listlampiran = [];

        DB::beginTransaction();

        try {

            foreach($req->file("lampiran") as $i => $lm){
                $listlampiran[$i]["isi_lampiran"] =  "data:image/png;base64,".base64_encode(file_get_contents($lm->path()));
                $listlampiran[$i]["jenis"] = "akhir";
                $listlampiran[$i]["id_pengaduan"] = $req->id_pengaduan;

                $lampiran = Lampiran::create($listlampiran[$i]);
            }

            Pengaduan::find($req->id_pengaduan)->update(["status"=>"Selesai"]);

            $cl = ChangeLog::create([
                "keterangan_log"=>"mengubah status menjadi Selesai",
                "id_pengaduan"=>$req->id_pengaduan,
                "id_changer"=>Auth::user()->id,
                "tanggal"=>Carbon::now()->toDatetimeString()
            ]);
            
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
            //throw $th;
        }

        DB::commit();
        return redirect()->back();



    }
}
