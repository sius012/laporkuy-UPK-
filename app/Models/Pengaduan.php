<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    protected $table = "pengaduan";
    protected $primaryKey = "id_pengaduan";
    protected $fillable = [
        "judul_pengaduan",
        "id_jp",
        "id_pelapor",
        "id_status",
        "keterangan",
        "tanggal",
        "lokasi"
    ];


    public function jenis(){
        return $this->hasOne(JenisPengaduan::class,"id_jp","id_jp");
    }

    public function pelapor(){
        return $this->hasOne(User::class,"id","id_pelapor");
    }

    public function lampiran(){
        return $this->hasMany(Lampiran::class,"id_pengaduan","id_pengaduan");
    }

}
