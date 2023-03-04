<?php
namespace App\Helpers;

class LaporkuyHelper {
     public $nav = "";


    public static function renderNav(){
        $nav = [[
            "nama_menu" => "Dashboard",
            "icon" => "fa fa-dashboard",
            "url" => url("/admin/dashboard"),
            'visibility' => 'Admin'
        ],
        [
            "nama_menu" => "Data Pengaduan",
            "icon" => "fa fa-file",
            "url" => route('datapengaduan'),
            'visibility' => 'Admin',
        ],
        [
            "nama_menu" => "Jenis Pengaduan",
            "icon" => "fa fa-file-text",
            "url" => url("/admin/jenispengaduan"),
            'visibility' => 'Admin'
        ],
        [
            "nama_menu" => "Cetak Laporan",
            "icon" => "fa fa-user",
            "url" => route("admin.cetaklaporan"),
            "visibility"=>"Admin"
        ],
        [
            "nama_menu" => "Tugas Saya",
            "icon" => "fa fa-file-text",
            "url" => url("/tugas-saya"),
            'visibility' => 'Petugas'
        ],
        [
            "nama_menu" => "Riwayat Tugas",
            "icon" => "fa fa-history",
            "url" => url("/tugas-saya"),
            'visibility' => 'Petugas'
        ],
        [
            "nama_menu" => "Pengaturan Pengguna",
            "icon" => "fa fa-user",
            "url" => route("pengaturan.pengguna"),
            "visibility"=>"Admin"
        ],
        [
            "nama_menu" => "Profil",
            "icon" => "fa fa-user",
            "url" => route("pengaturan.profile"),
            "visibility"=>"Admin"
        ],
        
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

    public static function trunc($phrase, $max_words) {
        $phrase_array = explode(' ',$phrase);
        if(count($phrase_array) > $max_words && $max_words > 0)
           $phrase = implode(' ',array_slice($phrase_array, 0, $max_words)).'...';
        return $phrase;
     }
}

?>