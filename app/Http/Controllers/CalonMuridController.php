<?php

namespace App\Http\Controllers;
use App\Murid;
use App\Paket;
use Illuminate\Http\Request;


class CalonMuridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Murid::all();
        $data_paket = Paket::all();
        return view('calonMuridAdmin',compact('datas','data_paket'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $nik)
    {
        $data = array(
            'level'=>$request->level
        );
        Murid::whereNik($nik)->update($data);
        return redirect('admin-calonMurid')->with('success','Murid berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nik)
    {
        $datas = Murid::findOrFail($nik);
        $datas->delete();
        return redirect('admin-calonMurid')->with('success','Murid Berhasil Dihapus');
    }
}
