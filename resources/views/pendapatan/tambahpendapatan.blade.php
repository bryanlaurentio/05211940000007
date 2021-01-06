@extends('template')

@section('judulweb')
    Tambah Pendapatan
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
        <a href="/pendapatan" style="font-size:20px"> <i class="material-icons">&#xe5c4;</i> Kembali</a>
        <form action="/pendapatan/storependapatan" method="post">
            <div class="row">
                <div class="col-sm-6">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="usr">ID Pegawai:</label>
                        <select id="IDPegawai" name="IDPegawai" class="form-control" >
                            @foreach($pegawai_id as $n)
                                <option value="{{ $n->pegawai_id }} ">{{ $n->pegawai_nama  }}</option>
                             @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Bulan:</label>
                        <input type="number" class="form-control" required="required" name="Bulan">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Tahun:</label>
                        <input type="text" class="form-control" required="required" name="Tahun">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="pwd">Gaji:</label>
                        <input type="number" class="form-control" required="required" name="Gaji">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Tunjangan:</label>
                        <input type="number" class="form-control" required="required" name="Tunjangan">
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

