<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Http\Controllers\PengaduanController;
use App\Models\JenisPengaduan;
use App\Models\Penugasan;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contohjudul = [
            "Jalan di lingkungan kami rusak dan tidak pernah diperbaiki oleh pemerintah.",
            "Kami merasa khawatir dengan meningkatnya kejahatan di sekitar kami.",
            "Sampah di tempat pembuangan sampah tidak pernah diangkut sehingga menimbulkan bau dan mengundang lalat.",
            "Kualitas air di lingkungan kami sangat buruk dan berdampak pada kesehatan kami.",
            "Sekolah di daerah kami kekurangan fasilitas dan guru yang berkualitas.",
            "Layanan kesehatan di daerah kami sangat buruk dan sulit diakses.",
            "Tol yang menghubungkan dua kota sering macet dan menimbulkan kemacetan yang sangat parah.",
            "Kami kehilangan listrik di daerah kami selama berjam-jam setiap kali hujan deras.",
            "Tidak ada taman atau tempat rekreasi di lingkungan kami untuk anak-anak.",
            "Tingkat kebisingan dari pabrik di sekitar kami sangat mengganggu dan tidak dapat ditoleransi.",
        ];


        $contohketerangan = ["Jangan lupa kirim email konfirmasi",
        "Tolong buat laporan keuangan",
        "Update data pelanggan di database",
        "Buat presentasi produk terbaru",
        "Segera kirimkan barang pesanan",
        
        "Rapat dengan tim pukul 10 pagi",
        "Print dokumen ini sebanyak 10 kali",
        "Kirim proposal ke pihak terkait",
        "Koordinasi dengan departemen lain",
        "Periksa kembali anggaran keuangan"];


        $contohKeterangan_admin = [
            "Mohon segera melaporkan laporan proyek mingguan besok pukul 09.00 WIB di ruang rapat.", "Harap segera menyelesaikan tugas ini dalam waktu satu jam dan laporkan hasilnya pada saya melalui email.", "Anda diminta untuk mempersiapkan presentasi proyek besok dan menyampaikannya di depan tim.", "Silakan menyusun laporan keuangan bulanan dan menyerahkannya kepada direktur paling lambat tanggal 10 setiap bulannya.", "Mohon segera mengevaluasi performa tim dan menyusun rekomendasi untuk meningkatkan produktivitas kerja.", "Diharapkan untuk menyusun proposal proyek dengan jelas dan detail serta menyampaikannya pada rapat koordinasi besok.", "Tolong segera mengirimkan resume dan portofolio kerja Anda melalui email ke alamat yang sudah disediakan.", "Anda diinstruksikan untuk mengikuti pelatihan dan sertifikasi yang diselenggarakan oleh perusahaan dalam waktu dekat.", "Mohon segera mengirimkan laporan penjualan bulanan dan analisis pasar pada direktur paling lambat tanggal 5 setiap bulannya.", "Diharapkan untuk memenuhi target penjualan bulanan dan melaporkan hasilnya pada tim dalam rapat mingguan."
        ];

        $lokasi = ["Jl. Kebon Jeruk No. 15, Jakarta Barat",
        "Jl. Sudirman No. 25, Pekanbaru",
        "Jl. Diponegoro No. 10, Purwokerto",
        "Jl. Cemara No. 5, Denpasar",
        "Jl. Raya Tarakan No. 32, Tarakan"];

        //Inisialisasi
        $jumlahPengaduan = 500;


        //Dapatkan Pengaduan Aktif
        $jp = JenisPengaduan::where("status", "Aktif")->get();

        //Dapatkan Admin
        $admin = User::role("Admin")->get();
        $petugas = User::role('Petugas')->get();
        $pengadu = User::role('Masyarakat')->get();

        $status = ["Menunggu", "Ke Petugas", "Diproses", "Selesai", "Ditolak", "Ditunda"];
        $tanggal = ["2022-12-25 00:00:00",
        "2023-03-15 15:30:45",
        "2022-11-01 09:45:20",
        "2023-06-30 12:15:00",
        "2022-09-10 08:00:00",
    
        "2023-04-05 11:30:00",
        "2022-10-20 18:00:00",
        "2023-02-14 06:15:30",
        "2022-11-11 21:00:00",
        "2023-01-01 00:00:00"];

        for ($i = 0; $i < $jumlahPengaduan; $i++) {
            //Mengisi Pengaduan Secara Acak
            $jenisp = $jp[rand(0, count($jp) - 1)]->id_jp;
            $judul = $contohjudul[rand(0, count($contohjudul) - 1)];
            $keterangan = $contohketerangan[rand(0, count($contohketerangan) - 1)];
            $lokasir = $lokasi[rand(0, count($lokasi)-1)];
            $tglr = $tanggal[rand(0, count($tanggal)-1)];
            $statusr = $status[rand(0, count($status)-1)];
            $pelapor = $pengadu[rand(0, count($pengadu)-1)];

            //lampiran 
            $fileContents =
                [storage_path('asset/img/photo1.png'), storage_path('asset/img/photo2.png'), storage_path('asset/img/photo3.jpg'),];

            $params = [
                "input"=>
                [
               
                "judul"=>$judul,
                "id_jenis"=>$jenisp,
                "keterangan"=>$keterangan,
                "lokasi"=>$lokasir,
                "tanggal"=>$tglr,
                "status"=>$statusr
                ],
                "type"=>"array",
                "id_pelapor"=>5,
                "lampiran"=>$fileContents,
                "giveMe"=>"result"
            ];

            $pengaduan = new PengaduanController;

            $admin1 = $admin[rand(0, count($admin)-1)];


            $pengaduanobj = $pengaduan->tambahGeneral($params);

            if($statusr == "Ke Petugas"){
                $penugasan = new Penugasan();
                
                $ptgid = [];
                $ptgj = [];

                foreach($petugas as $i => $pt){
                    $ptgid[$i] = $pt->id;
                    $ptgj[$i] = $pt->id;
                }

                $params = [
                    "input"=>$req->input(),
                    "type"=>"request",
                    "giveMe"=>"nothing"
                ];
            }
            
        }
    }
}
