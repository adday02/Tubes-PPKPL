<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemasukkan;

class PemasukkanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Pemasukkan::all();
        return view('pemasukkanAdmin',compact('datas'))->with('i');
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
            'id_pemasukkan'=>$request->id_pemasukkan,
            'tanggal'=>$request->tanggal,
            'jenis'=>$request->jenis,
            'nominal'=>$request->nominal
    );
        Pemasukkan::create($data);
        return redirect('admin-pemasukkan')->with('success','Pemasukkan berhasil ditambah');
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
    public function update(Request $request, $id_pemasukkan)
    {
        $data = array(
            'tanggal'=> $request->tanggal,
            'jenis'=> $request->jenis,
            'nominal'=> $request->nominal
        );
        Pemasukkan::whereId_pemasukkan($id_pemasukkan)->update($data);
        return redirect('admin-pemasukkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pemasukkan)
    {
        $datas = Pemasukkan::findOrFail($id_pemasukkan);
        $datas->delete();
        return redirect('admin-pemasukkan')->with('success','Pemasukkan Berhasil Dihapus');
    }
}
