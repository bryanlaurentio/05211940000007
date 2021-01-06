@extends('template')

@section('judulweb')
    Detail Pegawai
@endsection

@section('judulhalaman')
<body>
    <div class="container">

        <a href="/pegawai" style="font-size:20px;"> <i class="material-icons">&#xe5c4;</i> Kembali</a><br>
        <h4 style="text-align: center">Detail Pegawai</h4>
        <br>
    </div>
@endsection
@section('body')
    <div class="container">
            @foreach($pegawai as $p)
                    <div class="row">
                        <div class="col-sm-4"></div>

                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="usr">Nama :  </label>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Jabatan : </label>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Umur :</label>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Alamat : </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="usr">{{ $p->pegawai_nama }}</label>
                            </div>
                            <div class="form-group">
                                <label for="pwd">{{ $p->pegawai_jabatan }}</label>
                            </div>
                            <div class="form-group">
                                <label for="pwd">{{ $p->pegawai_umur }}</label>
                            </div>
                            <div class="form-group">
                                <label for="pwd">{{ $p->pegawai_alamat }}</label>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </div>
    <h4 style="text-align: center">Detail Pendapatan</h4>
    <div class = "container">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>Gaji</th>
                    <th>Tunjangan</th>
                </tr>
                @foreach($pendapatan as $pp)
                <tr>
                    <td>{{ $pp->Bulan }}</td>
                    <td>{{ $pp->Tahun }}</td>
                    <td>{{ $pp->Gaji }}</td>
                    <td>{{ $pp->Tunjangan }}</td>
                </tr>
                @endforeach
            </table>
</body>
@endsection

