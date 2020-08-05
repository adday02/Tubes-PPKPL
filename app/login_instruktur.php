<?php
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class login_instruktur extends Authenticatable
{
	protected $table='instruktur';
	protected $primaryKey = 'id_instruktur';
    protected $fillable = ['id_instruktur', 'nama','password','no_hp', 'jk','foto','alamat','level']; //field tabel
    public $timestamps = false;
}

?>