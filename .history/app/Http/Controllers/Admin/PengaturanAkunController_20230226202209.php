<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class PengaturanAkunController extends Controller
{
    public function index(Request $req){
        $user = User::all();
        return view("admin.pengaturanpengguna.index", ["user"=>$user]);
    }
}
