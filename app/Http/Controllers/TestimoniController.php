<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimoni;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Testimoni::all();
        return view('TestimoniAdmin',compact('datas'))->with('i');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'foto'=>'required|image|max:2048'
        ]);

        $foto = $request->file('foto');
        $new_name = rand().'.'.$foto->getClientOriginalExtension();
        $foto->move(public_path('foto'), $new_name);

        $data = array(
            'id_testimoni'=>$request->id_testimoni,
            'nama'=>$request->nama,
            'foto'=>$new_name,
        );
        Testimoni::create($data);
        return redirect('admin-testimoni')->with('success','Testimoni berhasil ditambah');
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
    public function update(Request $request, $id_testimoni)
    {
        $foto = $request->file('foto');
        if($request->hasFile('foto')){
            $new_name = rand().'.'.$foto->getClientOriginalExtension();
            $foto->move(public_path('foto'), $new_name);
            $data = array(
                'nama'=> $request->nama,
                'foto'=>$new_name,
            );
            Testimoni::whereId_testimoni($id_testimoni)->update($data);
            return redirect('admin-testimoni');
        }else {
            $data = array(
                'nama'=> $request->nama,
            );
            Testimoni::whereId_testimoni($id_testimoni)->update($data);
            return redirect('admin-testimoni');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_testimoni)
    {
        $datas = Testimoni::findOrFail($id_testimoni);
        $datas->delete();
        return redirect('admin-testimoni')->with('success','Testimoni Berhasil Dihapus');
    }
}
