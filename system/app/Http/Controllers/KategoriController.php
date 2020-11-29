<?php  

namespace App\Http\Controllers;
use App\Models\Kategori;

class KategoriController extends Controller {
	function index(){
		$data['list_kategori'] = Kategori::all();
		return view('kategori.index', $data);
	}
	function create(){
		return view('kategori.create');
	}
	function store(){
		$kategori = new Kategori;
		$kategori->jenis = request('jenis');
		$kategori->nama = request('nama');
		$kategori->stok = request('stok');
		$kategori->save();

		return redirect('kategori')->with('success', 'Data Berhasil Ditambahkan');
	}
	function show(Kategori $kategori){
		$data['kategori'] = $kategori;
		return view('kategori.show', $data);
	}
	function edit(Kategori $kategori){
		$data['kategori'] = $kategori;
		return view('kategori.edit', $data);
	}
	function update(Kategori $kategori){
		$kategori->jenis = request('jenis');
		$kategori->nama = request('nama');
		$kategori->stok = request('stok');
		$kategori->save();

		return redirect('kategori');
	}
	function destroy(Kategori $kategori){
		$kategori->delete();

		return redirect('kategori');
	}
	
	
}