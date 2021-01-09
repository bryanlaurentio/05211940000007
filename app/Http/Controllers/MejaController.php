<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//import java.io.*;
//use 'namepace';

class MejaController extends Controller
{
    //
    public function index()
    {
    	// mengambil data dari table pegawai
        $meja = DB::table('meja')->paginate(10);
        //$pegawai = DB::table('pegawai')->get();

    	// mengirim data pegawai ke view index
    	return view('meja.meja',['meja' => $meja]);
    }
    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
        $meja = DB::table('meja')
        ->get();
        // memanggil view tambah
        return view('meja.tambah',['meja' => $meja]);

    }
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('meja')->insert([
            'merkmeja' => $request->merk,
            'stockmeja' => $request->stock,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/meja');

    }
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $meja = DB::table('meja')->where('kodemeja',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('meja.edit',['meja' => $meja, 'jabatan' => $meja]);

    }
    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('meja')->where('kodemeja',$request->id)->update([
            'merkmeja' => $request->merk,
            'stockmeja' => $request->stock,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/meja');
    }
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('meja')->where('kodemeja',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/meja');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$meja = DB::table('meja')
		->where('merkmeja','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('meja.meja',['meja' => $meja]);

    }
}
