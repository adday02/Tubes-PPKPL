<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $table = 'testimoni'; // nama tabel
	protected $primaryKey = 'id_testimoni'; // primary key tabel
	protected $fillable = ['id_testimoni','nama', 'foto']; //field tabel
	public $timestamps = false;
}
