<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangeLog extends Model
{
    use HasFactory;

    protected $table = "change_log";
    protected $primaryKey = "id_cl";

    protected $fillable = [
        "keterangan_log","id_pengaduan","id_changer","tanggal"

    ];

    public $timestamps = false;


    public function user(){
        return $this->belongsTo(User::class,"id_changer")
    }
}
