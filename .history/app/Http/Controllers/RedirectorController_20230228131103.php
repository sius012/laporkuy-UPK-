<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class RedirectorController extends Controller
{
    public function index(){
        if(Auth::user()->roles['admin'])
    }
}
