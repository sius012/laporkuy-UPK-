<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetugasLapangan extends Model
{
    use HasFactory;
    protected $table = "petugas_lapangan";
    protected $primaryKey = "id_pl";
    protected $fillable = [
        "id_pl","id_petugas","id_penugasan","jabatan","status"
    ];
}
