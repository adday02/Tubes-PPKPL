<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal'; // nama tabel
	protected $primaryKey = 'id_jadwal'; // primary key tabel
	protected $fillable = ['id_jadwal','nik', 'tanggal','jam']; //field tabel
	public $timestamps = false;

	public function murid()
{
	return $this->belongsTo('App\Murid','nik');
}
}

