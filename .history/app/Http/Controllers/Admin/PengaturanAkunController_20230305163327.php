<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class PengaturanAkunController extends Controller
{
    public function index(Request $req){
        $user = User::all();
        $role = Role::all();
        return view("admin.pengaturanpengguna.index", ["user"=>$user,"role"=>$role]);
    }

    public function tambahPengguna(Request $req){
      
        $this->validate($req,[
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

    

        $user = User::create(
            ['name'=>$req->name,
            'nik'=>$req->nik,
            "email"=>$req->email,
            "alamat"=>$req->alamat,
            "password"=>Hash::make($req->password)]
        );

        $user->assignRole($req->role);
        

        return redirect()->back();
        
    }

    public function getSingleUser(Request $req){
        User::find($req->id)
    }
}
