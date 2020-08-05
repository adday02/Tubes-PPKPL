<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instruktur extends Model
{
    protected $table='instruktur';
    protected $primaryKey = 'id_instruktur';
    protected $fillable = ['id_instruktur', 'nama','password','no_hp', 'jk','foto','alamat','level']; //field tabel
    public $timestamps = false;
}
