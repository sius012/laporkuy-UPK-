<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\PetugasLapangan;
use Illuminate\Support\Facades\DB;
use App\Models\Lampiran;
use App\Models\ChangeLog;
use App\Models\Penugasan;
use Illuminate\Support\Carbon;
use App\Models\Notification;
use Auth;
class PenugasanController extends Controller
{
    public function tugassaya(){
        $var = PetugasLapangan::where("id_petugas", 4)->get();

        $query = Pengaduan::with("lampiran")->with(["penugasan.petugas_lapangan"=> function($q){
            $q->where("id_petugas", Auth::user()->id);
        }]);

        $color = ["masuk"=>"bg-success","proses"=>"bg-warning","selesai"=>"bg-info"];

        $pengaduan['masuk'] = Pengaduan::with("lampiran")->with(["penugasan.petugas_lapangan"=> function($q){
            $q->where("id_petugas", Auth::user()->id);
        }])->where("status","Ke Petugas")->get();
        $pengaduan['proses'] = Pengaduan::with("lampiran")->with(["penugasan.petugas_lapangan"=> function($q){
            $q->where("id_petugas", Auth::user()->id);
        }])->whereIn("status",["Diproses","Ditunda"])->get();
        $pengaduan['selesai'] =  Pengaduan::with("lampiran")->with(["penugasan.petugas_lapangan"=> function($q){
            $q->where("id_petugas", Auth::user()->id);
        }])->where("status","Selesai")->get();

   

        return view('petugas.tugassaya', ["pengaduan"=>$pengaduan,"color"=>$color]);
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

            $pengaduan = Pengaduan::find($req->id_pengaduan)->update(["status"=>"Selesai"]);
            Penugasan::where("id_pengaduan", $req->id_pengaduan)->update(["keterangan_petugas"=>$req->keterangan]);
            $cl = ChangeLog::create([
                "keterangan_log"=>"mengubah status menjadi Selesai",
                "id_pengaduan"=>$req->id_pengaduan,
                "id_changer"=>Auth::user()->id,
                "tanggal"=>Carbon::now()->toDatetimeString()
            ]);

            $notif = Notification::create(["id_user"=>$pe, "judul"=>"Penugasan Batal", "isi"=> "<b>".$pengaduan->judul ."</b> ".":" ."Anda sekarang bukan petugas"]);
            
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
            //throw $th;
        }

        DB::commit();
        return redirect()->back();



    }
}
