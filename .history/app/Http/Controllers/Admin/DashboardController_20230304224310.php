<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getdata(Request $req){
        $pengaduan = [];
        $pengaduan["masuk"] = Pengaduan::where("status","Menunggu")->get();
        $pengaduan["kepetugas"] = Pengaduan::where("status","Ke Petugas")->get();
        $pengaduan["diproses"] = Pengaduan::where("status","Diproses")->get();
        $pengaduan["diproses"] = Pengaduan::where("status","Diproses")->get();


        return json_encode("tes");
    }
}
