<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengaturanProfilController extends Controller
{
    public function index(){
        $role = Auth::user()->roles[0]->name;
        return view($role == "Masyarakat" ? "profilecomp" : "" , ['transparent'=>false]);
    }
}
