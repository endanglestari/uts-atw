<?php 

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller 
{
	function showLogin(){
		return view('login');
	}

	function loginProcess(){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('admin/beranda')->with('success', 'Login Anda Berhasil');
		}else{
			return back()->with('danger', 'Login Anda Gagal, Silahkan Periksa Kembali email dan Password Anda. Terima Kasih');
		}
	}

	function logout(){
		Auth::logout();
		return redirect('beranda');
	}

	function registration(){

	}

	function forgotPassword(){

	}
	
}