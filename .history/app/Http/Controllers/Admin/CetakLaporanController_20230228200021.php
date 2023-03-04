<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Data

class CetakLaporanController extends Controller
{
    public function index(Request $req){
        return view("admin.cetaklaporan.index");
    }
}
