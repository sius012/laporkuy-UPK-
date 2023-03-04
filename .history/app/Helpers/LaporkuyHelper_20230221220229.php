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
        ],
        [
            "nama_menu" => "Tugas Saya",
            "icon" => "fa fa-file-text",
            "url" => url("/tugas-saya")
        ]
    ];

        return $nav;
    }


    public static function renderSpan($status){
            if($status=="Menunggu"){
                return "bg-menunggu";
            }else if($status=="Ke Petugas"){
                return "bg-kepetugas";
            }else if($status=="Diproses"){
                return "bg-diproses";
            }else if($status=="Ditunda"){
                return "bg-ditunda";
            }else if($status=="Selesai"){
                return "bg-selesai";
            }
    }
}

?>