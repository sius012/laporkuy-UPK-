<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        

        Schema::create('jenis_pengaduan', function (Blueprint $table) {
            $table->id('id_jp');
            $table->string("jenis");
            $table->string("keterangan");
            $table->enum("status", ['Aktif','Non-aktif'])->default('Aktif');
            $table->timestamps();
        });

        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id('id_pengaduan');
            $table->string('judul_pengaduan');
            $table->unsignedBigInteger('id_jp');
            $table->unsignedBigInteger('id_pelapor');
            $table->enum('status',["Menunggu","Diproses","Ke Petugas","Ditunda", "Selesai","Di"]);
            $table->string('keterangan', 255);
            $table->string('lokasi');
            $table->dateTime('tanggal', $precision = 0);
            $table->timestamps();

            $table->foreign('id_pelapor')->references('id')->on('users');
            $table->foreign('id_jp')->references('id_jp')->on('jenis_pengaduan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
