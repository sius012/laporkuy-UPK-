<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penugasan extends Model
{
    use HasFactory;
    protected $table = "penugasan";
    protected $primaryKey = "id_penugasan";
    protected $fillable = [
        "id_pengaduan","id_status","id_admin","keterangan_admin","keterangan_petugas"	
    ];

    public function petugas_lapangan(){
        return $this->hasMany(PetugasLapangan::class, "id_penugasan", "id_penugasan");
    }

    public function tanggapan(){
        return $this->hasMany(Tanggapan::class, "id_penugasan", "id_penugasan")->orderBy("");
    }
    
}
