<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisPengaduan;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getdata(Request $req){
        $pengaduan = [];
        $pengaduan["masuk"] = Pengaduan::where("status","Menunggu")->count();
        $pengaduan["diproses"] = Pengaduan::whereIn("status",["Diproses","Ke Petugas","Ditunda"])->count();
        $pengaduan["selesai"] = Pengaduan::where("status","Selesai")->count();
        $pengaduan["dibatalkan"] = Pengaduan::where("status","Batal")->count();
        
        
        //datapengaduan;
        $jml = JenisPengaduan::with("pengaduan")->get();


        $pengaduan["chart"]['jenis_pengaduan'] = JenisPengaduan::get()->pluck("jenis");

        foreach($jml as $i => $jmls){
            
        }


        return json_encode($pengaduan);
    }
}
