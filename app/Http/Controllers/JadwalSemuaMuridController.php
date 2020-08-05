<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
use App\Murid;


class JadwalSemuaMuridController extends Controller
{
    public function index()
    {
        $datas = Jadwal::all();
        $data_murid = Murid::all();
        return view('jadwalSemuaMurid',compact('datas','data_murid'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
}
