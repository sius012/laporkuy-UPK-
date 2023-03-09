<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Http\Controllers\PengaduanController;
use App\Models\JenisPengaduan;
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
        $contohjudul = ["Jalan di lingkungan kami rusak dan tidak pernah diperbaiki oleh pemerintah.",
        "Kami merasa khawatir dengan meningkatnya kejahatan di sekitar kami.",
        "Sampah di tempat pembuangan sampah tidak pernah diangkut sehingga menimbulkan bau dan mengundang lalat.",
        "Kualitas air di lingkungan kami sangat buruk dan berdampak pada kesehatan kami.",
        "Sekolah di daerah kami kekurangan fasilitas dan guru yang berkualitas.",
        "Layanan kesehatan di daerah kami sangat buruk dan sulit diakses.",
        "Tol yang menghubungkan dua kota sering macet dan menimbulkan kemacetan yang sangat parah.",
        "Kami kehilangan listrik di daerah kami selama berjam-jam setiap kali hujan deras.",
        "Tidak ada taman atau tempat rekreasi di lingkungan kami untuk anak-anak.",
        "Tingkat kebisingan dari pabrik di sekitar kami sangat mengganggu dan tidak dapat ditoleransi.",];


        $contohketerangan = ["Kami sangat kecewa dengan kinerja pemerintah daerah yang tidak memperhatikan kebutuhan masyarakat di daerah kami. Banyak infrastruktur penting yang tidak diperbaiki selama bertahun-tahun dan justru semakin memburuk, seperti jalan rusak, jembatan ambruk, dan sistem pengairan yang tidak berfungsi dengan baik."

        ,"Kami mengajukan keluhan terhadap perusahaan tambang yang beroperasi di daerah kami. Selama bertahun-tahun, perusahaan tersebut telah merusak lingkungan sekitar, mengganggu ekosistem, dan menyebabkan kerusakan pada rumah-rumah warga di sekitar tambang. Kami berharap pemerintah daerah dapat melakukan tindakan yang tegas untuk menghentikan aktivitas perusahaan yang merusak tersebut."
        
       , "Kami merasa tidak dihargai sebagai warga negara karena sistem hukum yang tidak adil di negara ini. Terlalu banyak kasus di mana pelaku kejahatan kaya atau berkuasa dapat menghindari hukuman atau dihukum lebih ringan karena pengaruh mereka, sedangkan rakyat kecil seringkali menjadi korban kebijakan yang tidak adil dan ketidakadilan sistem hukum."
        
        ,"Kami kesal dengan kebijakan pemerintah yang tidak efektif dalam mengatasi masalah kemacetan di daerah kami. Berbagai proyek infrastruktur baru telah dibangun, namun kemacetan semakin parah setiap harinya. Kami membutuhkan solusi yang lebih kreatif dan inovatif untuk mengatasi masalah kemacetan yang semakin mengganggu kehidupan kami sehari-hari."
        
       , "Kami mengajukan keluhan terhadap perusahaan besar yang beroperasi di daerah kami. Perusahaan tersebut seringkali mengabaikan hak-hak pekerja dan melakukan praktik-praktik yang merugikan para pekerja, seperti pengupahan yang rendah, jam kerja yang terlalu lama, dan ketidakamanan kerja. Kami membutuhkan perlindungan yang lebih baik dari pemerintah untuk melindungi hak-hak kami sebagai pekerja."
         ];



         //Inisialisasi
         $jumlahPengaduan = 500;


         //Dapatkan Pengaduan Aktif
         $pengaduan = JenisPengaduan::where("status","Aktif")->get();

    }
}
