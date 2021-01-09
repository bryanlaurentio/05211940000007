@extends('template')

@section('judulweb')
    Edit Meja
@endsection

@section('judulhalaman')
<body>
    <div class="container" style="text-align: center">
        <br><br>
        <h3 style="text-align: center">Edit Meja</h3>
        <img src = "/svg/undraw_Google_docs_re_evm3.svg" width="500" height="172">
    </div>
@endsection
@section('body')
    <div class="container">
        <a href="/meja" style="font-size:20px"> <i class="material-icons">&#xe5c4;</i> Kembali</a>
            @foreach($meja as $m)
                <form action="/meja/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $m->kodemeja }}"> <br/>
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="usr">Merk</label>
                                <input type="text" class="form-control" required="required" name="merk" value="{{ $m->merkmeja }}">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Stock</label>
                                <input type="number" class="form-control" required="required" name="stock" required="required" value="{{ $m->stockmeja }}">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" required="required" type="radio" name="tersedia" id="tersedia" value="Y" {{$m->tersedia == 'Y'? 'checked' : ''}} >
                                <label class="form-check-label" for="exampleRadios1">
                                   Tersedia (Y)
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" required="required" type="radio" name="tersedia" id="tersedia" value="N" {{$m->tersedia == 'N'? 'checked' : ''}}>
                                <label class="form-check-label" for="exampleRadios2">
                                  Tidak Tersedia (N)
                                </label>
                              </div>
                            <div style="padding: 8px">
                                <input type="submit" class="btn btn-primary" value="Simpan Data">
                            </div>
                        </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</body>
@endsection

