<?php

namespace App\Http\Controllers\Masyarakat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pe

class MasyarakatController extends Controller
{
    public function index(Request $req){
        return view("welcome");
    }

    public function buatpengaduan(Request $req){

    }
}
