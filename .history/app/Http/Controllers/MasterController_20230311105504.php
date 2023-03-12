<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Aut
class MasterController extends Controller
{
    public function getNotifications(Request $req){
        $notif = Notification::where("id_user", Auth::user()->id)->get();


    }
}
