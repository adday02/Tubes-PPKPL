<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'paket'; //nama tabel
    protected $primaryKey = 'id_paket'; //primary key tabel
    protected $fillable = ['id_paket', 'nama','waktu','mobil','harga']; //field tabel
    public $timestamps = false;
}
