<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//import java.io.*;
//use 'namepace';

class PendapatanController extends Controller
{
    //
    public function index()
    {
    	// mengambil data dari table pendapatan
        $pendapatan = DB::table('pendapatan')->paginate(5);
        //$pegawai = DB::table('pendapatan')->get();

    	// mengirim data pendapatan ke view index
    	return view('pendapatan.pendapatan',['pendapatan' => $pendapatan]);

    }
    public function tambah()
    {
        $pegawai_id = DB::table('pegawai')
        ->orderBy('pegawai_nama','asc')
        ->get();
        // memanggil view tambah
        return view('pendapatan.tambahpendapatan',['pegawai_id' => $pegawai_id]);

    }
    public function store(Request $request)
    {
        // insert data ke table pendapatan
        DB::table('pendapatan')->insert([
            'IDPegawai' => $request->IDPegawai,
            'Bulan' => $request->Bulan,
            'Tahun' => $request->Tahun,
            'Gaji' => $request->Gaji,
            'Tunjangan' => $request->Tunjangan
        ]);
        // alihkan halaman ke halaman pendapatan
        return redirect('/pendapatan');

    }

    public function edit($id)
    {
        // mengambil data pendapatan berdasarkan id yang dipilih
        $pendapatan = DB::table('pendapatan')->where('ID',$id)->get();
        $pegawai_id = DB::table('pegawai')
        ->orderBy('pegawai_nama','asc')
        ->get();
        // passing data pendapatan yang didapat ke view edit.blade.php
        return view('pendapatan.editpendapatan',['pendapatan' => $pendapatan, 'pegawai_id' => $pegawai_id]);

    }
    // update data pendapatan
    public function update(Request $request)
    {
        // update data pendapatan
        DB::table('pendapatan')->where('ID',$request->id)->update([
            'IDPegawai' => $request->IDPegawai,
            'Bulan' => $request->Bulan,
            'Tahun' => $request->Tahun,
            'Gaji' => $request->Gaji,
            'Tunjangan' => $request->Tunjangan
        ]);
        // alihkan halaman ke halaman pendapatan
        return redirect('/pendapatan');
    }

    // method untuk hapus data pendapatan
    public function hapus($id)
    {
        // menghapus data pendapatan berdasarkan id yang dipilih
        DB::table('pendapatan')->where('ID',$id)->delete();

        // alihkan halaman ke halaman pendapatan
        return redirect('/pendapatan');
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pendapatan sesuai pencarian data
		$pendapatan = DB::table('pendapatan')
		->where('IDPegawai','=',$cari)
		->paginate();

    		// mengirim data pendapatan ke view index
		return view('pendapatan.pendapatan',['pendapatan' => $pendapatan]);

	}
}
