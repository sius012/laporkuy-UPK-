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
        Schema::create("photoprofile", function(Blueprint $table){
            $table->id();
            $table->unsignedInteger("")
        });
    }

    /**
     * Reverse the migrations.lapo
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
