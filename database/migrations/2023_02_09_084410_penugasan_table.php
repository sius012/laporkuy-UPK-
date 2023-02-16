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
        
        Schema::create('penugasan', function (Blueprint $table) {
            $table->id('id_penugasan');
            $table->unsignedBigInteger('id_pengaduan');
            $table->unsignedBigInteger('id_admin');
            $table->string('keterangan_admin');
            $table->string('keterangan_petugas')->nullable();
            $table->timestamps();
            $table->foreign('id_pengaduan')->references('id_pengaduan')->on('pengaduan');
            $table->foreign('id_admin')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
            if (Schema::hasColumn('penugasan', 'id_status'))
            {
                Schema::table('penugasan', function (Blueprint $table)
                {
                    $table->dropColumn('id_status');
                });
            }
        
    }
};
