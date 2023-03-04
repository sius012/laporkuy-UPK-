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
        $role = Role::all();
        return view("admin.pengaturanpengguna.index", ["user"=>$user,"role"=>$role]);
    }

    public function tambahPengguna(Request $req){
        dd($req);
        $this->validate($req,[
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        dd($req);

        $user = User::create(
            ['name'=>$req->name,
            'nik'=>$req->nik,
            "email"=>$req->email,
            "alamat"=>$req->alamat,
            "password"=>$req->password]
        );

        
    }
}
