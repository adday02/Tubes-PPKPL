<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
use App\Murid;
use Carbon\Carbon;

class JadwalMuridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kemaren = Carbon::tomorrow()->toDateString();
        $besok = Carbon::today()->toDateString();
        $mingguan   = date('Y-m-d', strtotime("$besok +14 day"));
        $datas = Jadwal::all();
        $data_murid = Murid::all();
        return view('jadwalMurid',compact('datas','data_murid', 'kemaren','mingguan'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array(
            'nik'=>$request->nik,
            'jam'=>$request->jam,
            'tanggal'=>$request->tanggal
    );
        $cektanggal=Jadwal::where('tanggal', $request->tanggal)->count();
        if($cektanggal > 0){
            $cekjam=Jadwal::where('jam', $request->jam)->count();
            if($cekjam > 0){
                return redirect('murid-jadwal')->withErrors('Booking gagal, Harap Masukkan waktu Booking yang lain');
            }else{
            Jadwal::create($data);
                return redirect('murid-jadwal')->with('success','Jadwal berhasil ditambah');
            }
        }else{
            Jadwal::create($data);
            return redirect('murid-jadwal')->with('success','Jadwal berhasil ditambah');
        }        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_jadwal)
    {
        $data = array(
            'jam'=>$request->jam,
            'tanggal'=>$request->tanggal
        );
        Jadwal::whereId_jadwal($id_jadwal)->update($data);
        return redirect('murid-jadwal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_jadwal)
    {
        $datas = Jadwal::findOrFail($id_jadwal);
        $datas->delete();
        return redirect('murid-jadwal')->with('success','Jadwal Berhasil Dihapus');
    }
} 

