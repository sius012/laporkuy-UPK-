<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPengaduan extends Model
{
    use HasFactory;
    protected $table = "jenis_pengaduan";
    protected $primaryKey = "id_jp";
    protected $fillable = [
        "jenis",
        "keterangan",
        'status'
    ];

    public function pengaduan(){
        return $this->hasMany(Pengaduan::class, "id_jp","id_jp");
    }
    
    
}
