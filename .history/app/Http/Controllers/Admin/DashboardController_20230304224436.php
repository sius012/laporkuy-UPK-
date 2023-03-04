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
        $pengaduan["diproses"] = Pengaduan::whereIn("status",["Diproses","Ke Petugas"])->get();
        $pengaduan["s"] = Pengaduan::where("status","Diproses")->get();


        return json_encode("tes");
    }
}
