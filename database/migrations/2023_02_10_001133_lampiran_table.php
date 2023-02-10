<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lampiran', function (Blueprint $table) {
            $table->id('id_lampiran');
            $table->unsignedBigInteger('id_pengaduan');
            $table->enum('jenis', ["awal", "akhir"]);
            $table->mediumText('isi_lampiran');

            $table->foreign('id_pengaduan')->references('id_pengaduan')->on('pengaduan');
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
