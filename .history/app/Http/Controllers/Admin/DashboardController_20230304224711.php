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
        $pengaduan["masuk"] = Pengaduan::where("status","Menunggu")->get();
        $pengaduan["diproses"] = Pengaduan::whereIn("status",["Diproses","Ke Petugas","Ditunda"])->get();
        $pengaduan["selesai"] = Pengaduan::where("status","Selesai")->get();
        $pengaduan["dibatalkan"] = Pengaduan::where("status","Batal")->get();

        $pengaduan["chart"]['jenis_pengaduan'] = JenisPengaduan::w

        return json_encode("tes");
    }
}
