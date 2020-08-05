<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Instruktur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('instruktur', function (Blueprint $table){
            $table->integer('id_instruktur')->primary();
            $table->string('nama');
            $table->string('password');
            $table->string('no_hp');
            $table->string('jk');
            $table->string('foto');
            $table->text('alamat');
            $table->string('level');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instruktur');
    }
}
