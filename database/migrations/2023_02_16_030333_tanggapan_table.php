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
        Schema::create("tanggapan", function(Blueprint $table){
            $table->id("id_tanggapan");
            $table->unsignedBigInteger("id_sender");
            $table->unsignedBigInteger("id_penugasan");
            $table->string("tanggapan");
            $table->dateTime("tanggal", $precision = 0);

            $table->foreign("id_penugasan")->references("id_penugasan")->on("penugasan");
            $table->foreign("id_sender")->references("id")->on("users");
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
