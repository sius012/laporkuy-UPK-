<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JenisPengaduan;

class JenisPengaduanController extends Controller
{
    public function index(){
        $jenisPengaduan = JenisPengaduan::with('pengaduan')->get();

        return view("admin.jenispengaduan.index", ['jenis_pengaduan'=>$jenisPengaduan]);
    }

    public function ubah(Request $req){
        $jp = JenisPengaduan::find($req->id_jp);
        switch ($req->state) {
            case 'aktif':
                $jp->status = 'Aktif';
                $jp->save();
                break;
            
            case 'nonaktif':
                $jp->status = 'Non-aktif';
                $jp->save();
                 break;
            case 'delete':
                 $jp->delete();
            break;
            default:
                # code...
                break;
        }
        
        return  $jp;
    }

    public function buat(Request $req){
        dd($req);
    }
}
