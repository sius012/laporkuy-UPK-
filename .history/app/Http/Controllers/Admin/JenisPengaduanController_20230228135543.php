<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use 

class JenisPengaduanController extends Controller
{
    public function index(){
        $jenisPengaduan;
        return view("admin.jenispengaduan.index");
    }
}
