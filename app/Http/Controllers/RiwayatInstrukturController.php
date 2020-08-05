<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Riwayat;
use App\Murid;
use App\Instruktur;

class RiwayatInstrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Riwayat::all();
        $data_murid = Murid::all();
        $data_instruktur = Instruktur::all();
        return view('riwayatBelajarInstruktur',compact('datas','data_murid','data_instruktur'))->with('i');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nik'=>'required',
            'tanggal'=>'required',
            'saran'=>'required|string|max:100|regex:/^[a-zA-Z\s]*$/',
        ],
        [
            'required'      => 'Form tidak boleh kosong',
            'string'        => 'Form harus diisi dengan huruf',
            'regex'         => 'Data yang dimasukkan tidak boleh menggunakan simbol'
        ]

    );
        $array=[
            'nik'=>$request->nik,
            'tanggal'=>$request->tanggal,
            'saran'=>$request->saran,
            'id_instruktur'=>$request->id_instruktur
        ];
        Riwayat::create($array);
        return redirect('instruktur-riwayatPembelajaran')->with('success','Riwayat Pembelajaran berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_riwayat)
    {
        $this->validate($request,[
            'nik'=>'required',
            'tanggal'=>'required',
            'saran'=>'required|string|max:100|regex:/^[a-zA-Z\s]*$/',
        ],
        [
            'required'      => 'Form tidak boleh kosong',
            'string'        => 'Form harus diisi dengan huruf',
            'regex'         => 'Data yang dimasukkan tidak boleh menggunakan simbol'
        ]

    );
        $data = array(
            'nik'=>$request->nik,
            'tanggal'=>$request->tanggal,
            'saran'=>$request->saran
        );
        Riwayat::whereId_riwayat($id_riwayat)->update($data);
        return redirect('instruktur-riwayatPembelajaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_riwayat)
    {
        $datas = Riwayat::findOrFail($id_riwayat);
        $datas->delete();
        return redirect('instruktur-riwayatPembelajaran')->with('success','Riwayat Pembelajaran Berhasil Dihapus');
    }
}
