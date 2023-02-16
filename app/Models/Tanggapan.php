<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;

    protected $table = "tanggapan";
    protected $primaryKey = "id_tanggapan";
    protected $fillable = [
        "id_tanggapan","id_sender","id_penugasan","tanggapan","tanggal"
    ];
    public $timestamps = false;

    public function sender(){
       return $this->hasOne(User::class, "id","id_sender");
    }
}
