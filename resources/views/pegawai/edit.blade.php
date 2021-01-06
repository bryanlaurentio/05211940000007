@extends('template')

@section('judulweb')
    Edit Pegawai
@endsection

@section('judulhalaman')
<body>
    <div class="container" style="text-align: center">
        <br><br>
        <h3 style="text-align: center">Edit Pegawai</h3>
        <img src = "/svg/undraw_Google_docs_re_evm3.svg" width="500" height="172">
    </div>
@endsection
@section('body')
    <div class="container">
        <a href="/pegawai" style="font-size:20px"> <i class="material-icons">&#xe5c4;</i> Kembali</a>
            @foreach($pegawai as $p)
                <form action="/pegawai/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="usr">Nama</label>
                                <input type="text" class="form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Jabatan</label>
                                <select id="jabatan" name="jabatan" class="form-control" >
                                    @foreach($jabatan as $j)
                                        <option value="{{ $j->jabatan }}" @if($p->pegawai_jabatan==$j->jabatan) selected="selected" @endif>{{ $j->jabatan  }}</option>
                                    @endforeach
                                  </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="pwd">Umur</label>
                                <input type="number" class="form-control" required="required" name="umur" value="{{ $p->pegawai_umur }}">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Alamat</label>
                                <input type="text" class="form-control" required="required" name="alamat" value="{{ $p->pegawai_alamat }}">
                            </div>
                            <br>
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

