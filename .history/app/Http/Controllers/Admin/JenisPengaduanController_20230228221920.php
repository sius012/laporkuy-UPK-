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
                break;
            
            case 'nonaktif':
                $jp->status = 'Non-aktif';
                 break;
            case 'delete':
                 $jp->status = 'Non-aktif';
            break;
            default:
                # code...
                break;
        }
        $jp->save();
        return 
    }
}
