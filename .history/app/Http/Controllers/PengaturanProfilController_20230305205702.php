<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaturanProfilController extends Controller
{
    public function index(){
        $role = Auth::user()->roles[0]
        return view("pengaturanprofil", ['transparent'=>false]);
    }
}
