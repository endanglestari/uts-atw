<?php 

namespace App\Http\Controllers;


class HomeController extends Controller {

	function showBeranda(){
		return view('beranda');
	}

	function showHome(){
		return view('home');
	}

	function showTulip(){
		return view('tulip');
	}

	function showBlog(){
		return view('blog');
	}

	function showAbout(){
		return view('about');
	}

	function showFlowers(){
		return view('flowers');
	}

	function showSpesial(){
		return view('spesial');
	}

	function showAkun(){
		return view('akun');
	}

	function showBaru(){
		return view('baru');
	}

	function showHarga(){
		return view('harga');
	}

	function showContact(){
		return view('contact');
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