<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengeluaran;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Pengeluaran::all();
        return view('pengeluaranAdmin',compact('datas'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array(
            'id_pengeluaran'=>$request->id_pengeluaran,
            'tanggal'=>$request->tanggal,
            'jenis'=>$request->jenis,
            'nominal'=>$request->nominal
    );
        Pengeluaran::create($data);
        return redirect('admin-pengeluaran')->with('success','Pengerluaran berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pengeluaran)
    {
        $data = array(
            'tanggal'=> $request->tanggal,
            'jenis'=> $request->jenis,
            'nominal'=> $request->nominal
        );
        Pengeluaran::whereId_pengeluaran($id_pengeluaran)->update($data);
        return redirect('admin-pengeluaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pengeluaran)
    {
        $datas = Pengeluaran::findOrFail($id_pengeluaran);
        $datas->delete();
        return redirect('admin-pengeluaran')->with('success','Pengeluaran Berhasil Dihapus');
    }
}
