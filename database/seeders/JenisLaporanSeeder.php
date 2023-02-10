<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JenisPengaduan;

class JenisLaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        JenisPengaduan::create([
            "jenis"=>"Bencana Alam",
            "keterangan"=>"berisi kronologi bencana alam"
        ]);

        JenisPengaduan::create([
            "jenis"=>"Tindakan Kriminal",
            "keterangan"=>"berisi laporan tindakan Kriminal"
        ]);

        JenisPengaduan::create([
            "jenis"=>"Masalah Sosial",
            "keterangan"=>"berisi laporan masalah sosial"
        ]);

        JenisPengaduan::create([
            "jenis"=>"Pelaporan fasilitas",
            "keterangan"=>"berisi pelaporan kerusakan fasilitas"
        ]);
        // \App\Models\User::factory()->create([
        //     'jenis' => 'Lingkungan',
        //     'keterangan' => 'ini adalah lingkungan',
        // ]);

    }
}
