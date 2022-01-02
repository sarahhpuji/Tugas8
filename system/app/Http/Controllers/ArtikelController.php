<?php


namespace App\Http\Controllers;
use App\Models\Artikel;

class ArtikelController extends Controller
{
	function index(){
		$data['list_artikel'] = Artikel::all();
		return view('artikel.index', $data);
	}

	function create(){
		return view('artikel.create');
	}

	function store(){
		$artikel = new Artikel;
		$artikel->judul = request('judul');
		$artikel->penulis = request('penulis');
		$artikel->isi = request('isi');
		$artikel->save();

		return redirect('artikel')->with('success','Data Berhasil Ditambahkan');
		// dd(request()->all());
	}

	function show(Artikel $artikel){
		$data['artikel'] = $artikel; 
		return view('artikel/show', $data);
	}

	function edit(Artikel $artikel){
		$data['artikel'] = $artikel;
		return view('artikel/edit', $data);
	}

	function update(Artikel $artikel){
		$artikel->judul = request('judul');
		$artikel->penulis = request('penulis');
		$artikel->isi = request('isi');
		$artikel->save();

		return redirect('artikel')->with('success','Data Berhasil Diubah');
	}

	function destroy(Artikel $artikel){
		$artikel->delete();
		return redirect('artikel')->with('danger','Data Berhasil Dihapus');
	}
	function filter(){
		$nama_artikel = request('judul');
		$stok = explode(",", request('stok'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		//$data['list_artikel'] = artikel::where('nama_artikel', 'like' "%$nama_artikel%") -> get();
		//$data['list_artikel'] = artikel::whereIn('stok', $stok)->get();
		//$data['list_artikel'] = artikel::whereBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_artikel'] = artikel::where('stok', '<>', $stok) -> get();
		//$data['list_artikel'] = artikel::whereNotIn('stok', $stok)->get();
		$data['list_artikel'] = artikel::whereNotBetween('harga', [$harga_min, $harga_max])->get();
		$data ['stok'] = request('stok');
		return view('artikel/index', $data);
	
	}
}