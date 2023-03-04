<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan

class CetakLaporanController extends Controller
{
    public function index(Request $req){
        return view("admin.cetaklaporan.index");
    }
}
