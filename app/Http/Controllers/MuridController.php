<?php

namespace App\Http\Controllers;
use App\Murid;
use App\Paket;
use Illuminate\Http\Request;

class MuridController extends Controller
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
        return view('muridAdmin',compact('datas','data_paket'))->with('i');

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
        return redirect('admin-murid')->with('success','Murid berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
            'level'=>$request->level
        );
        Murid::whereNik($nik)->update($data);
        return redirect('admin-murid');

        }else{
            $data = array(
            'nama'=> $request->nama,
            'password'=> $request->password,
            'no_hp'=> $request->no_hp,
            'alamat'=> $request->alamat,
            'level'=>$request->level
        );
        Murid::whereNik($nik)->update($data);
        return redirect('admin-murid');
        }       


            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $nim
     * @return \Illuminate\Http\Response
     */
    public function destroy($nik)
    {
       try{
            $datas = Murid::findOrfail($nik);
            $datas->delete();
            return redirect('admin-murid')->with('success','Murid Berhasil Dihapus');
        }catch(\Throwable $th){
            return redirect('admin-murid')->withErrors('Data gagal dihapus. Harap hapus data murid yang terkait');
        }
    }
}
