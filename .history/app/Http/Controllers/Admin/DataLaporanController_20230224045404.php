<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\PengaduanController as PC;
use App\Http\Controllers\Controller;
use App\Models\JenisPengaduan;

class DataLaporanController extends Controller
{
    public function __construct(){

    }
    public function index(){
        $jenis = JenisPengaduan::all();
        $pengaduan = PC::ambilSemua();

        dd($pengaduan);
        return view("Admin.dataLaporan.index", ["jenisaduan"=>$jenis,"pengaduan"=>$pengaduan]);
    }
}
