<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Riwayat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat', function (Blueprint $table){
            $table->increments('id_riwayat');
            $table->date('tanggal');
            $table->string('nik')->index();
            $table->foreign('nik')->references('nik')->on('murid');
            $table->integer('id_instruktur')->integer();
            $table->foreign('id_instruktur')->references('id_instruktur')->on('instruktur');
            $table->string('saran');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('riwayat');
    }
}
