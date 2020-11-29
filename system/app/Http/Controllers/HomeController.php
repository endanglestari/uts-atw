<?php 

namespace App\Http\Controllers;


class HomeController extends Controller {

	function showBeranda(){
		return view('beranda');
	}

	function showKategori(){
		return view('kategori');
	}
	
	function showGardening(){
		return view('gardening');
	}
	
	function showOutdoor(){
		return view('outdoor');
	}

	function showIndoor(){
		return view('indoor');
	}

	function showShopping(){
		return view('shopping');
	}

	function showUser(){
		return view('user');
	}

	function showKontak(){
		return view('kontak');
	}


}