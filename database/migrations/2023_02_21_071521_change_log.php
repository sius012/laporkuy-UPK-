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
        Schema::create("change_log", function(Blueprint $table){
            $table->id("id_cl");
            $table->string("keterangan_log");
            $table->unsignedBigInteger("id_pengaduan");
            $table->unsignedBigInteger("id_changer");
            $table->dateTime("tanggal");

            $table->foreign("id_pengaduan")->references("id_pengaduan")->on("pengaduan");
            $table->foreign("id_changer")->references("id")->on("users");
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
