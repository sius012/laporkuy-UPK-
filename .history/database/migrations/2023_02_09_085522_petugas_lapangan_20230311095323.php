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
        Schema::create('petugas_lapangan', function (Blueprint $table) {
            $table->id('id_pl');
            $table->unsignedBigInteger('id_petugas');
            $table->unsignedBigInteger('id_penugasan');
            $table->string('jabatan');
            $table->enum('status', ["tidak aktif", "diganti", "aktif"]);
            $table->timestamps();

            $table->foreign('id_petugas')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_penugasan')->references('id_penugasan')->on('penugasan')->;
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
