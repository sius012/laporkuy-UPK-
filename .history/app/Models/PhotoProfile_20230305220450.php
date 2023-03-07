<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PhotoProfile extends Model
{
    use HasFactory;

    protected $table = "photoprofile";

    protected $fillable = [
        "isi","id_user"
    ];
}
