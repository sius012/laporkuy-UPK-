<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JenisPengaduan;
use Illuminate\Console\View\Components\Alert;

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
        $input = $req->input();
        unset($input["_id"])
        $jp = JenisPengaduan::create($req->input());
        
        Alert::success('Berhasil', 'Jenis Pengaduan Berhasil dibuat');
        return redirect()->back();
    }
}
