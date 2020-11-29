<?php  

namespace App\Http\Controllers;
use App\Models\Gardening;
use Faker;

class GardeningController extends Controller {
	function index(){
		$data['list_gardening'] = Gardening::all();
		return view('gardening.index', $data);
	}
	function create(){
		return view('gardening.create');
	}
	function store(){
		$gardening = new Gardening;
		$gardening->judul = request('judul');
		$gardening->nama = request('nama');
		$gardening->deskripsi = request('deskripsi');
		$gardening->save();
        
		return redirect('gardening')->with('success', 'Data Berhasil Ditambahkan');
	}
	function show(Gardening $gardening){
		$data['gardening'] = $gardening;
		return view('gardening.show', $data);
	}
	function edit(Gardening $gardening){
		$data['gardening'] = $gardening;
		return view('gardening.edit', $data);
	}
	function update(Gardening $gardening){
		$gardening->judul = request('judul');
		$gardening->nama = request('nama');
		$gardening->deskripsi = request('deskripsi');
		$gardening->save();

		return redirect('gardening')->with('success', 'Data Berhasil Diedit');
	}
	function destroy(Gardening $gardening){
		$gardening->delete();

		return redirect('gardening')->with('danger', 'Data Berhasil Dihapus');
	}

}