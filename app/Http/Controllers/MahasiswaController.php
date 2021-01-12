<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//import java.io.*;
//use 'namepace';

class MahasiswaController extends Controller
{
    //
    public function index()
    {
    	// mengambil data dari table pegawai
        $mahasiswa = DB::table('mahasiswa')->paginate(5);
        //$pegawai = DB::table('pegawai')->get();

    	// mengirim data pegawai ke view index
    	return view('mahasiswa.index',['mahasiswa' => $mahasiswa]);
    }
    public function tambah()
    {
        $mahasiswa = DB::table('mahasiswa')
        ->get();
        // memanggil view tambah
        return view('mahasiswa.tambah',['mahasiswa' => $mahasiswa]);

    }
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('mahasiswa')->insert([
            'NRP' => $request->NRP,
            'Nama' => $request->Nama,
            'Jurusan' => $request->Jurusan,
            'IPK' => $request->IPK
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/mahasiswa');
    }
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('mahasiswa')->where('NRP',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/mahasiswa');
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$mahasiswa = DB::table('mahasiswa')
		->where('Nama','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('mahasiswa.index',['mahasiswa' => $mahasiswa]);

    }
}
