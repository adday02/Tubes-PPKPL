<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Murid;
use App\Instruktur;
use App\Paket;
use App\Jadwal;
use App\Testimoni;
use App\Riwayat;
use App\Pemasukkan;
use App\Pengeluaran;

class DashboardController extends Controller
{
    public function index()
    {
    	$calonMurid = Murid::where('level','calon murid')->count();
    	$murid = Murid::where('level','murid')->count();
    	$lulusan = Murid::where('level','lulusan')->count();
    	$instruktur = Instruktur::count();
    	$paket = Paket::count();
    	$jadwal = Jadwal::count();
    	$testimoni = Testimoni::count();
    	$riwayat = Riwayat::count();
    	$pemasukkan = Pemasukkan::sum('nominal');
    	$pengeluaran = Pengeluaran::sum('nominal');

    	return view('dashboardAdmin', compact('calonMurid','murid','lulusan','instruktur','paket','jadwal','testimoni','riwayat','pemasukkan','pengeluaran'));
    }
}
