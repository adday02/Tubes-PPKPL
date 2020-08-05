<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemasukkan extends Model
{
    protected $table = 'pemasukkan'; // nama tabel
	protected $primaryKey = 'id_pemasukkan'; // primary key tabel
	protected $fillable = ['id_pemasukkan','tanggal', 'jenis','nominal']; //field tabel
	public $timestamps = false;
}
