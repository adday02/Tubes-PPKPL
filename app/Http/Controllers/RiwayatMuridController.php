<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Riwayat;
use App\Murid;
use App\Instruktur;

class RiwayatMuridController extends Controller
{
    public function index()
    {
        $datas = Riwayat::all();
        $data_murid = Murid::all();
        $data_instruktur = Instruktur::all();
        return view('riwayatBelajarMurid',compact('datas','data_murid','data_instruktur'))->with('i');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
}
