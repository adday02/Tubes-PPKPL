<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Murid;
use App\Paket;

class ProfileMuridController extends Controller
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
        return view('Murid',compact('datas','data_paket'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nik)
    {

        $foto = $request->file('foto');
        if($request->hasFile('foto'))
        {
            $new_name = rand().'.'.$foto->getClientOriginalExtension();
            $foto->move(public_path('foto'), $new_name);
            $data = array(
            'nama'=> $request->nama,
            'password'=> $request->password,
            'no_hp'=> $request->no_hp,
            'foto'=>$new_name,
            'alamat'=> $request->alamat,
            );
            Murid::whereNik($nik)->update($data);
            return redirect('murid');

        }else{
            $data = array(
            'nama'=> $request->nama,
            'password'=> $request->password,
            'no_hp'=> $request->no_hp,
            'alamat'=> $request->alamat,
            );
            Murid::whereNik($nik)->update($data);
            return redirect('murid');
        }       
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
