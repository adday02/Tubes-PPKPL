<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $table = 'Pengeluaran'; // nama tabel
	protected $primaryKey = 'id_pengeluaran'; // primary key tabel
	protected $fillable = ['id_pengeluaran','tanggal', 'jenis','nominal']; //field tabel
	public $timestamps = false;
}
