<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    protected $table='murid';
    protected $primaryKey = 'nik';
    protected $fillable = ['nik','nama','password','id_paket','jk','no_hp','alamat','foto','level']; //field tabel
    public $timestamps = false;

public function paket()
{
	return $this->belongsTo('App\Paket','id_paket');
}
}
