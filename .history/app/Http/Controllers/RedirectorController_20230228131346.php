<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class RedirectorController extends Controller
{
    public function index(){
        if(Auth::user()->roles[0] == "Admin"){
            return redirect()->route('admin.dashboard.index');
        }else if(Auth::user()->roles[0] == "Petugas"){

        }else if(Auth::user()->roles[0] == "Masyarakat"){

        }
    }
}
