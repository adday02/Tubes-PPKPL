<?php

namespace App\Http\Controllers;
use App\Paket;

use Illuminate\Http\Request;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Paket::all();
        return view('paketAdmin',compact('datas'))-> with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahPaketAdmin'); 
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
        'id_paket'=>$request->id_paket,
        'nama'=>$request->nama,
        'waktu'=>$request->waktu,
        'mobil'=>$request->mobil,
        'harga'=>$request->harga
    );
    
        Paket::create($data);
        return redirect('admin-paket')-> with('success','Paket berhasil ditambah');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_paket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_paket)
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
    public function update(Request $request, $id_paket)
    {
        $data = array(
            'nama'=> $request->nama,
            'waktu'=> $request->waktu,
            'mobil'=> $request->mobil,
            'harga'=> $request->harga
        );
        Paket::whereId_paket($id_paket)->update($data);
        return redirect('admin-paket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_paket)
    {
        try{
            $datas = Paket::findOrfail($id_paket);
            $datas->delete();
            return redirect('admin-paket')->with('success','Paket Berhasil Dihapus');
        }catch(\Throwable $th){
            return redirect('admin-paket')->withErrors('Data gagal dihapus. Harap hapus data murid yang terkait');
        }
    }
}
