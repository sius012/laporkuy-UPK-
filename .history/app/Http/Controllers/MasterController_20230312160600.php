<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class MasterController extends Controller
{
    public function getNotifications(Request $req){
        $notif = Notification::where("id_user", Auth::user()->id)->orderBy("created_at","desc")->get();

        return json_encode($notif);
    }

    public function readNotifications(){
        $notif
    }
}
