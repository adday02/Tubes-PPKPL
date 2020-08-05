<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Murid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('murid', function (Blueprint $table){
            $table->string('nik')->primary();
            $table->string('nama');
            $table->string('password');
            $table->integer('id_paket')->unsigned();
            $table->foreign('id_paket')->references('id_paket')->on('paket');
            $table->string('jk');
            $table->string('no_hp');
            $table->text('alamat');
            $table->string('foto');
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
        Schema::dropIfExists('murid');
    }
}
