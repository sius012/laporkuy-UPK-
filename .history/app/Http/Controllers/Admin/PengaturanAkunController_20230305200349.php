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
       $user = User::find($req->id);
       $role = User::find($req->id)->roles;
        return json_encode(["user"=>$user, "role"=>$role]);
    }

    public function editUser(Request $req){
        $name = $req->name;
        $nik = $req->nik;
        $alamat = $req->nik;
        $email = $req->email;
        $role = $req->role;

        $user = User::find($req->id);

        $user->name = $name;
        $user->nik = $nik;
        $user->alamat = $alamat;
        
        $countemail = User::where("email", $email)->count();

        if($countemail > 0){
            return redirect()->back();
        }

        $user->email = $email

    }
}
