<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    protected $table = 'riwayat'; // nama tabel
	protected $primaryKey = 'id_riwayat'; // primary key tabel
	protected $fillable = ['id_riwayat','tanggal', 'nik','id_instruktur','saran']; //field tabel
	public $timestamps = false;

	public function murid()
{
	return $this->belongsTo('App\Murid','nik');
}
	public function instruktur()
{
	return $this->belongsTo('App\Instruktur','id_instruktur');
}

}
