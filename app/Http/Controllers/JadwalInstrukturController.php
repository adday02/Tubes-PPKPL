<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
use App\Murid;

class JadwalInstrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Jadwal::all();
        $data_murid = Murid::all();
        return view('jadwalInstruktur',compact('datas','data_murid'))->with('i');
    }
    public function destroy($id_jadwal)
    {
        $datas = Jadwal::findOrFail($id_jadwal);
        $datas->delete();
        return redirect('instruktur-jadwal')->with('success','Jadwal Berhasil Dihapus');
    }
}
