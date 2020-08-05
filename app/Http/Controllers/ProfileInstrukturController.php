<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instruktur;

class ProfileInstrukturController extends Controller
{
     public function index()
    {
        $datas = Instruktur::all();
            return view('Instruktur',compact('datas'))->with('i');
    }

    public function update(Request $request, $id_instruktur)
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
            Instruktur::whereId_instruktur($id_instruktur)->update($data);
            return redirect('murid');

        }else{
            $data = array(
            'nama'=> $request->nama,
            'password'=> $request->password,
            'no_hp'=> $request->no_hp,
            'alamat'=> $request->alamat,
        );
            Instruktur::whereId_instruktur($id_instruktur)->update($data);
            return redirect('murid');
        }       
        
        Instruktur::whereId_instruktur($id_instruktur)->update($data);
        return redirect('instruktur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
