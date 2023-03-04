<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JenisPengaduan;

class JenisPengaduanController extends Controller
{
    public function index(){
        $jenisPengaduan = JenisPengaduan::with('pengaduan')->get();
        dd($jenisPengaduan[0]->pengaduan()->count());
        return view("admin.jenispengaduan.index", ['jenis_pengaduan']);
    }
}
