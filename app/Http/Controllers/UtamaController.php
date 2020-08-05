<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instruktur;
use App\Testimoni;
use App\Paket;

class UtamaController extends Controller
{
     public function index()
    {
        $instruktur = Instruktur::all();
        $testimoni = Testimoni::all();
        $paket = Paket::all();
		return view('utama',compact('instruktur','testimoni','paket'));
	}
}