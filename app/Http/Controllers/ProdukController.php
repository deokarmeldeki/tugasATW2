<?php

	namespace App\Http\Controllers;
	use App\Models\Produk;

	class ProdukController extends Controller {
		function index(){
			return view('produk.index');
		}
		function create(){
			return view('create.index');
		}
		function store(){
			$produk = new Produk;
			$produk->nama = request('nama');

			$produk->harga = request('harga');

			$produk->berat = request('berat');

			$produk->stok = request('stok');

			$produk->deskripsi = request('deskripsi');
			dd(request()->all());
			
		}
		function show(){
			
		}
		function edit(){
			
		}
		function update(){
			
		}
		function destroy(){
			
		}
	}