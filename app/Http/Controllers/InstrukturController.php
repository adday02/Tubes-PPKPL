<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instruktur;


class InstrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Instruktur::all();
        return view('instrukturAdmin',compact('datas'))->with('i');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $foto = $request->file('foto');
        $new_name = rand().'.'.$foto->getClientOriginalExtension();
        $foto->move(public_path('foto'), $new_name);

        $data = array(
            'id_instruktur'=>$request->id_instruktur,
            'nama'=>$request->nama,
            'password'=>$request->password,
            'no_hp'=>$request->no_hp,
            'jk'=>$request->jk,
            'foto'=>$new_name,
            'alamat'=>$request->alamat,
            'level'=>$request->level
        );
        Instruktur::create($data);
        return redirect('admin-instruktur')->with('success','Instruktur berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_instruktur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_instruktur)
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
    public function update(Request $request, $id_instruktur)
    {

        $foto = $request->file('foto');
        if($request->hasFile('foto'))
        {
            $new_name = rand().'.'.$foto->getClientOriginalExtension();
            $foto->move(public_path('foto'), $new_name);
            $data = array(
                'id_instruktur'=> $request->id_instruktur,
                'nama'=> $request->nama,
                'password'=> $request->password,
                'no_hp'=> $request->no_hp,
                'foto'=>$new_name,
                'alamat'=> $request->alamat,
            );
        Instruktur::whereId_instruktur($id_instruktur)->update($data);
        return redirect('admin-instruktur');
        }else{
            $data = array(
                'id_instruktur'=> $request->id_instruktur,
                'nama'=> $request->nama,
                'password'=> $request->password,
                'no_hp'=> $request->no_hp,
                'alamat'=> $request->alamat,
            );
        Instruktur::whereId_instruktur($id_instruktur)->update($data);
        return redirect('admin-instruktur');
        }
        }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_instruktur)
    {
        try{
            $datas = Instruktur::findOrfail($id_instruktur);
            $datas->delete();
            return redirect('admin-instruktur')->with('success','instruktur Berhasil Dihapus');
        }catch(\Throwable $th){
            return redirect('admin-instruktur')->withErrors('Data gagal dihapus. Harap hapus data murid yang terkait');
        }
    }
}
