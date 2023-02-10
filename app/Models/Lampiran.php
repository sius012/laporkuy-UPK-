<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lampiran extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = "lampiran";
    protected $primaryKey = "id_lampiran";
    public $timestamps = false;
    protected $fillable = [
        "id_pengaduan",
        "jenis",
        "isi_lampiran",
    ];
}
