<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisPengaduan;
use App\Models\Pengaduan;
use App\Models\Penugasan;
use App\Models\PetugasLapangan;
use App\Models\Lampiran;
use App\Models\Status;
use App\Models\Tanggapan;
use Auth;
use App\Models\User;
use App\Models\ChangeLog;
use Carbon\Carbon;

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
                        $listlampiran[$i] = "data:image/png;base64,".base64_encode(file_get_contents($lp->path()));
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

        return redirect()->back();

    }



    public static function ambilSemua(){
        $pengaduan = Pengaduan::with("jenis")->with("pelapor")->get();
        //dd($pengaduan);
        return $pengaduan;
    }

    public static function getSingle(Request $req){
        $pengaduan = Pengaduan::with("jenis")->with("lampiran")->with("pelapor", "penugasan.tanggapan.sender","jenis_pengaduan")->with("penugasan.petugas_lapangan.petugas")->with('log.user')->find($req->id_pengaduan);
        //dd($pengaduan);
        return $pengaduan;
    }

    public function getPetugaslist(Request $req){
        $petugas = User::role("Petugas")->where("name","LIKE","%".$req->name."%")->get();
        return $petugas;
    }

    public function assignpetugas(Request $req){
      //  dd($req);
        DB::beginTransaction();
           

            try {
                $penugasan = Penugasan::create([
                    "id_pengaduan"=>$req->id_pengaduan,
                    "id_admin"=>Auth::user()->id,
                    "keterangan_admin"=>$req->keterangan_admin
                ]);
    
                //menambahkan petugas lapangan
                foreach($req->petugas as $i => $p){
                    $pl = PetugasLapangan::create([
                        "id_petugas"=>$p,
                        "id_penugasan"=>$penugasan->id_penugasan,
                        "jabatan"=>$req->jabatan[$i],
                        "status"=>"aktif"
                    ]);
                }
                
                Pengaduan::where("id")->update(["status"=>"Ke Petugas"]);
                Penugasan::where($req->id_pengaduan)->update(["keterangan"=>$req->keterangan]);
                
            } catch (\Throwable $th) {
                dd($th);
                DB::rollBack();
            }
        DB::commit();

        return redirect()->back();
        
    }

    public function sendtanggapan(Request $req){
        $pesan = $req->pesan;
        $id_penugasan = $req->id_penugasan;
        $id_sender = Auth::user()->id;

        $tanggapan = Tanggapan::create([
            "tanggapan"=>$pesan,
            "id_penugasan"=>$id_penugasan,
            "id_sender"=>$id_sender,
            "tanggal"=>Carbon::now()->toDateTimeString()
        ]);

        return $tanggapan;
    }


    public function ubahStatus(Request $req){
        $statusarr = explode(":",$req->val);
        $status = $statusarr[0];
        $id_pengaduan = $statusarr[1];

        $cl = ChangeLog::create([
            "keterangan_log"=>"mengubah status menjadi ".$status,
            "id_pengaduan"=>$id_pengaduan,
            "id_changer"=>Auth::user()->id,
            "tanggal"=>Carbon::now()->toDatetimeString()
        ]);


        $pengaduan = Pengaduan::find($id_pengaduan);
        $pengaduan->status = $status;
        $pengaduan->save();

        return json_encode($cl);
    }
}
