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
        "status",
        "keterangan",
        "tanggal",
        "lokasi"
    ];


    public function jenis(){
        return $this->belongsTo(JenisPengaduan::class,"id_jp","id_jp");
    }

    public function pelapor(){
        return $this->belongsTo(User::class,"id_pelapor");
    }

    public function lampiran(){
        return $this->hasMany(Lampiran::class,"id_pengaduan","id_pengaduan")->where("jenis","awal");
    }

    
    public function lampiranakhir(){
        return $this->hasMany(Lampiran::class,"id_pengaduan","id_pengaduan")->where("akhir");
    }

    public function penugasan(){
        return $this->hasOne(Penugasan::class,"id_pengaduan","id_pengaduan");
    }

    public function jenis_pengaduan(){
        return $this->belongsTo(JenisPengaduan::class,"id_jp","id_jp");
    }

    public function log(){
        return $this->hasMany(ChangeLog::class, "id_pengaduan","id_pengaduan");
    }

}
