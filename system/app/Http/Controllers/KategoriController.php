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
	function filter(){
		$jenis = request('jenis');
		$nama = request('nama');
		$stok = explode(",", request('stok'));
		$data['list_kategori'] = Kategori::where('jenis', 'like', "%$jenis%")->get();
		//$data['list_kategori'] = Kategori::where('nama', 'like', "%$nama%")->get();
		//$data['list_kategori'] = Kategori::whereIn('stok', $stok)->get();
		//$data['list_kategori'] = Kategori::whereNot('stok', $stok)->get();
		//$data['list_kategori'] = Kategori::whereNotIn('stok', $nama)->get();
		//$data['list_kategori'] = Kategori::whereNull('stok')->get();
		//$data['list_kategori'] = Kategori::whereNotNull('stok')->get();
		//$data['list_kategori'] = Kategori::whereDate('created_at', '2020-11-15')->get();
		//$data['list_kategori'] = Kategori::whereYear('created_at', '2020')->get();
		$data['jenis'] = $jenis;
		$data['nama'] = $nama;
		$data['stok'] = request('stok');
		return view('kategori.index', $data);
	}
	
}