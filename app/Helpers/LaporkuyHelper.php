<?php
namespace App\Helpers;

class LaporkuyHelper {
     public $nav = "";


    public static function renderNav(){
        $nav = [[
            "nama_menu" => "Dashboard",
            "icon" => "fa fa-dashboard",
            "url" => url("/admin/dashboard")
        ],
        [
            "nama_menu" => "Data Laporan",
            "icon" => "fa fa-file",
            "url" => url("/admin/datalaporan")
        ],
        [
            "nama_menu" => "Kontrol Laporan",
            "icon" => "fa fa-file-text",
            "url" => url("/admin/kontrollaporan")
        ]
    ];

        foreach($nav as $mn){
            echo '
            <li class="nav-item">
                <a class="nav-link '.($mn["url"] == url()->current() ? "actived-lk" : "").'" aria-current="page" href="'.$mn['url'].'"><i class="'.$mn['icon'].' m-3 d-inline"></i>'.$mn["nama_menu"].'</a>
            </li>
            ';
        }
    }
}

?>