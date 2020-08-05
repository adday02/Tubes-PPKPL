<?php
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class login_murid extends Authenticatable
{
	protected $table='murid';
	protected $primaryKey = 'nik';
    protected $fillable = ['nik','nama','password','id_paket','jk','no_hp','alamat','foto','level']; //field tabel
    public $timestamps = false;
}

?>