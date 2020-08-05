<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Murid;
use App\Paket;

class DaftarController extends Controller
{
	    public function index()
    {
        $datas = Murid::all();
        $data_paket = Paket::all();
        return view('daftar',compact('datas','data_paket'))->with('i');

    }

    public function store(Request $request)
    {
        $foto = $request->file('foto');
        $new_name = rand().'.'.$foto->getClientOriginalExtension();
        $foto->move(public_path('foto'), $new_name);

            $data = array(
            'nik'=> $request->nik,
            'nama'=> $request->nama,
            'password'=> $request->password,
            'id_paket'=> $request->id_paket,
            'jk'=> $request->jk,
            'no_hp'=> $request->no_hp,
            'foto'=>$new_name,
            'alamat'=> $request->alamat,
            'level'=>$request->level
        );
        Murid::create($data);
        return redirect('masuk')->with('success','Murid berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
