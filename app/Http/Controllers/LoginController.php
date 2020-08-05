<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Admin;
use App\Instruktur;
use App\Murid;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function masuk(Request $kiriman){
    	$data1=Admin::where('id_admin',$kiriman->username)->where('password',$kiriman->password)->get();
    	$data2=Instruktur::where('id_instruktur',$kiriman->username)->where('password',$kiriman->password)->get();
    	$data3=Murid::where('nik',$kiriman->username)->where('password',$kiriman->password)->get();

    	if (count($data1)>0) {
    		Auth::guard('admin')->LoginUsingId($data1[0]['id_admin']);
    		return redirect('/admin');
    	}
    	else if (count($data2)>0) {
    		Auth::guard('instruktur')->LoginUsingId($data2[0]['id_instruktur']);
            return redirect('/instruktur');
    	}
    	else if (count($data3)>0) {
    		Auth::guard('murid')->LoginUsingId($data3[0]['nik']);
    		return redirect('/murid');
    	}
    	else{
    		return redirect('/masuk')->with('Login Gagal');
    	}

    }

    function keluar(){
    	if (Auth::guard('admin')->check()) {
    		Auth::guard('admin')->logout();
    	}else if (Auth::guard('instruktur')->check()) {
    		Auth::guard('instruktur')->logout();
		}else if (Auth::guard('murid')->check()) {
    		Auth::guard('murid')->logout();
		}
        else if (Auth::guard('lulusan')->check()) {
            Auth::guard('lulusan')->logout();
        }
		return redirect('/masuk');

    }

}
