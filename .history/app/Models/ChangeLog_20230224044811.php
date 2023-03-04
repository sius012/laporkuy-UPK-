<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangeLog extends Model
{
    use HasFactory;

    protected $table = "change_log";
    protected $
    protected $fillable = [
        "keterangan_log","id_pengaduan","id_changer","tanggal"

    ];

    public $timestamps = false;
}
