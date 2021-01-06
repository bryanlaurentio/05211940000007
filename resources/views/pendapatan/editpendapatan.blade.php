@extends('template')

@section('judulweb')
    Edit Pendapatan
@endsection

@section('judulhalaman')
<body>
    <div class="container" style="text-align: center">
        <br><br>
        <h3 style="text-align: center">Edit Pendapatan</h3>
        <img src = "/svg/undraw_Google_docs_re_evm3.svg" width="500" height="172">
    </div>
@endsection
@section('body')
    <div class="container">
        <a href="/pendapatan" style="font-size:20px"> <i class="material-icons">&#xe5c4;</i> Kembali</a>
            @foreach($pendapatan as $pp)
                <form action="/pendapatan/updatependapatan" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $pp->ID }}"> <br/>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="usr">ID Pegawai:</label>
                                <select id="IDPegawai" name="IDPegawai" class="form-control" >
                                    @foreach($pegawai_id as $n)
                                        <option value="{{ $n->pegawai_id }}" @if($pp->IDPegawai==$n->pegawai_id) selected="selected" @endif>{{ $n->pegawai_nama  }}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Bulan:</label>
                                <input type="number" class="form-control" required="required" name="Bulan" value="{{ $pp->Bulan }}">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Tahun:</label>
                                <input type="text" class="form-control" required="required" name="Tahun" value="{{ $pp->Tahun }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="pwd">Gaji:</label>
                                <input type="number" class="form-control" required="required" name="Gaji" value="{{ $pp->Gaji }}">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Tunjangan:</label>
                                <input type="number" class="form-control" required="required" name="Tunjangan" value="{{ $pp->Tunjangan }}">
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
