@extends('template')

@section('judulweb')
    Tambah Mahasiswa
@endsection

@section('judulhalaman')
<body>
    <div class="container" style="text-align: center">
            <br><br>
            <h3 style="text-align: center">Tambah Mahasiswa</h3>
            <img src = "/svg/undraw_Add_files_re_v09g.svg" width="500" height="172">
    </div>
@endsection

@section('body')
    <div class="container">
        <a href="/mahasiswa" style="font-size:20px"> <i class="material-icons">&#xe5c4;</i> Kembali</a>
        <br>
        <form action="/mahasiswa/store" method="post">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="usr">NRP</label>
                        <input type="number" id = "NRP" class="form-control" required="required" name="NRP">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Nama</label>
                        <input type="text" id = "Nama" class="form-control" required="required" name="Nama">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Jurusan</label>
                        <input type="text" id = "Jurusan" class="form-control" required="required" name="Jurusan">
                    </div>
                    <div class="form-group">
                        <label for="pwd">IPK</label>
                        <input type="number" step="0.01" id = "IPK" class="form-control" required="required" name="IPK">
                    </div>
                    <div style="padding: 8px">
                        <input type="submit" class="btn btn-primary" value="Simpan Data">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection

