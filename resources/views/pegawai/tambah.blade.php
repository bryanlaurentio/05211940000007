@extends('template')

@section('judulweb')
    Tambah Pegawai
@endsection

@section('judulhalaman')
<body>
    <div class="container" style="text-align: center">
            <br><br>
            <h3 style="text-align: center">Tambah Pendapatan</h3>
            <img src = "/svg/undraw_Add_files_re_v09g.svg" width="500" height="172">
    </div>
@endsection

@section('body')
    <div class="container">
        <a href="/pegawai" style="font-size:20px"> <i class="material-icons">&#xe5c4;</i> Kembali</a>
        <form action="/pegawai/store" method="post">
            <div class="row">
                <div class="col-sm-6">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="usr">Nama</label>
                        <input type="text" id = "nama" class="form-control" required="required" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Jabatan</label>
                        <select id="jabatan" name="jabatan" class="form-control" >
                            @foreach($jabatan as $j)
                                <option value="{{ $j->jabatan }} ">{{ $j->jabatan  }}</option>
                             @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="pwd">Umur</label>
                        <input type="number" id= "umur" class="form-control" required="required" name="umur">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Alamat</label>
                        <input type="text" id= "alamat" class="form-control" required="required" name="alamat">
                    </div>
                    <br>
                    <div style="padding: 8px">
                        <input type="submit" class="btn btn-primary" value="Simpan Data">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection

