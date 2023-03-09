<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Http\Controllers\PengaduanController;
use App\Models\JenisPengaduan;
use App\Models\User;
use Illuminate\Database\Seeder;

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


        $contohketerangan = [
            "Kami sangat kecewa dengan kinerja pemerintah daerah yang tidak memperhatikan kebutuhan masyarakat di daerah kami. Banyak infrastruktur penting yang tidak diperbaiki selama bertahun-tahun dan justru semakin memburuk, seperti jalan rusak, jembatan ambruk, dan sistem pengairan yang tidak berfungsi dengan baik.", "Kami mengajukan keluhan terhadap perusahaan tambang yang beroperasi di daerah kami. Selama bertahun-tahun, perusahaan tersebut telah merusak lingkungan sekitar, mengganggu ekosistem, dan menyebabkan kerusakan pada rumah-rumah warga di sekitar tambang. Kami berharap pemerintah daerah dapat melakukan tindakan yang tegas untuk menghentikan aktivitas perusahaan yang merusak tersebut.", "Kami merasa tidak dihargai sebagai warga negara karena sistem hukum yang tidak adil di negara ini. Terlalu banyak kasus di mana pelaku kejahatan kaya atau berkuasa dapat menghindari hukuman atau dihukum lebih ringan karena pengaruh mereka, sedangkan rakyat kecil seringkali menjadi korban kebijakan yang tidak adil dan ketidakadilan sistem hukum.", "Kami kesal dengan kebijakan pemerintah yang tidak efektif dalam mengatasi masalah kemacetan di daerah kami. Berbagai proyek infrastruktur baru telah dibangun, namun kemacetan semakin parah setiap harinya. Kami membutuhkan solusi yang lebih kreatif dan inovatif untuk mengatasi masalah kemacetan yang semakin mengganggu kehidupan kami sehari-hari.", "Kami mengajukan keluhan terhadap perusahaan besar yang beroperasi di daerah kami. Perusahaan tersebut seringkali mengabaikan hak-hak pekerja dan melakukan praktik-praktik yang merugikan para pekerja, seperti pengupahan yang rendah, jam kerja yang terlalu lama, dan ketidakamanan kerja. Kami membutuhkan perlindungan yang lebih baik dari pemerintah untuk melindungi hak-hak kami sebagai pekerja."
        ];


        $contohKeterangan_admin = [
            "Mohon segera melaporkan laporan proyek mingguan besok pukul 09.00 WIB di ruang rapat.",, "Harap segera menyelesaikan tugas ini dalam waktu satu jam dan laporkan hasilnya pada saya melalui email.", "Anda diminta untuk mempersiapkan presentasi proyek besok dan menyampaikannya di depan tim.", "Silakan menyusun laporan keuangan bulanan dan menyerahkannya kepada direktur paling lambat tanggal 10 setiap bulannya.", "Mohon segera mengevaluasi performa tim dan menyusun rekomendasi untuk meningkatkan produktivitas kerja.", "Diharapkan untuk menyusun proposal proyek dengan jelas dan detail serta menyampaikannya pada rapat koordinasi besok.", "Tolong segera mengirimkan resume dan portofolio kerja Anda melalui email ke alamat yang sudah disediakan.", "Anda diinstruksikan untuk mengikuti pelatihan dan sertifikasi yang diselenggarakan oleh perusahaan dalam waktu dekat.", "Mohon segera mengirimkan laporan penjualan bulanan dan analisis pasar pada direktur paling lambat tanggal 5 setiap bulannya.", "Diharapkan untuk memenuhi target penjualan bulanan dan melaporkan hasilnya pada tim dalam rapat mingguan."
        ];

        //Inisialisasi
        $jumlahPengaduan = 500;


        //Dapatkan Pengaduan Aktif
        $jp = JenisPengaduan::where("status", "Aktif")->get();

        //Dapatkan Admin
        $admin = User::role("Admin")->get();
        $petugas = User::role('Petugas')->get();
        $pengadu = User::role('Masyarakat')->get();

        $status = ["Menunggu", "Ke Petugas", "Diproses", "Selesai", "Ditolak", "Ditunda"];


        for($i = 0;$i < $jumlahPengaduan; $i++){
            //Mengisi Pengaduan Secara Acak
            $jenisp = $jp[rand()]

            $jenispengaduan = $contohjudul
            $pengaduan = new PengaduanController;
            
        }
    }
}
