<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class RedirectorController extends Controller
{
    public function index(){
        dd(Auth::user()->roles);
        if(Auth::user()->roles[0]->name == "Admin"){
            return redirect()->route('dashboard');
        }else if(Auth::user()->roles[0] == "Petugas"){
            return redirect()->route('admin.dashboard.index');
        }else if(Auth::user()->roles[0] == "Masyarakat"){
            return redirect()->route('admin.dashboard.index');
        }

     
    }
}