<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisPengaduan;
use App\Models\Pengaduan;
use App\Models\Lampiran;
use App\Models\Status;
use Auth;

use Illuminate\Support\Facades\DB;
class PengaduanController extends Controller
{
    

    public function tambah(Request $req){
        $this->validate($req, [
            'lampiran' => "required|array|min:3",
            'lampiran.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $input = $req->input();
        $listlampiran = [];

        

        DB::beginTransaction();
            try{
                
                if($req->hasFile("lampiran")){
                    foreach($req->file("lampiran") as $i => $lp){
                        $listlampiran[$i] = "data:image/jpg;base64,".base64_encode(file_get_contents($lp->path()));
                    }
                }

                $pengaduan = Pengaduan::create([
                    "judul_pengaduan" => $input["judul"],
                    "id_jp" => $input["id_jenis"],
                    "keterangan" => $input["keterangan"],
                    "id_pelapor" => Auth::user()->id,
                    "status" => "Menunggu",
                    "lokasi" => $input["lokasi"],
                    "tanggal" => $input["tanggal"]
                ]);


                //memasukan gambar
                foreach($listlampiran as $ll){
                    Lampiran::create([
                        "id_pengaduan"=>$pengaduan->id_pengaduan,
                        "jenis"=>"awal",
                        "isi_lampiran"=>$ll
                    ]);
                }

                


                }catch (Exception $e) {
                    DB::rollBack();
                    // $e->getMessage() contains the error message 
                }
        

        DB::commit();

    }



    public static function ambilSemua(){
        $pengaduan = Pengaduan::with("jenis")->with("pelapor")->get();
        //dd($pengaduan);
        return $pengaduan;
    }

    public static function getSingle(Request $req){
        $pengaduan = Pengaduan::with("jenis")->with("pelapor")->find($req->id_pengaduan);
        //dd($pengaduan);
        return $pengaduan;
    }
}
