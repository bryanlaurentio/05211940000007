@extends('template')

@section('judulweb')
    Tambah Meja
@endsection

@section('judulhalaman')
<body>
    <div class="container" style="text-align: center">
            <br><br>
            <h3 style="text-align: center">Tambah Meja</h3>
            <img src = "/svg/undraw_Add_files_re_v09g.svg" width="500" height="172">
    </div>
@endsection

@section('body')
    <div class="container">
        <a href="/meja" style="font-size:20px"> <i class="material-icons">&#xe5c4;</i> Kembali</a>
        <br>
        <form action="/meja/store" method="post">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="usr">Merk</label>
                        <input type="text" id = "merk" class="form-control" required="required" name="merk">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Stock</label>
                        <input type="number" id = "stock" class="form-control" required="required" name="stock">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tersedia" id="tersedia" value="Y">
                        <label class="form-check-label" for="exampleRadios1">
                           Tersedia (Y)
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="tersedia" id="tersedia" value="N">
                        <label class="form-check-label" for="exampleRadios2">
                          Tidak Tersedia (N)
                        </label>
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

