@extends('template')

@section('judulweb')
    Pendapatan
@endsection

@section('judulhalaman')
    <div class="container">
      <div class="row">
        <div class="col" style="text-align: center">
          <h4>Tabel Pendapatan</h4>
          <p>Tabel Pendapatan Menyajikan Data Pendapatan Tiap Pegawai</p>
        </div>
      </div>
    </div>

    <div class = "container">
        <div class = "row">
            <div class = "col-sm-6" style="text-align: left">
                <a href="/pendapatan" style="font-size:20px"> <i class="material-icons">&#xe5c4;</i> Kembali</a>
                <br>
                <a href="/pendapatan/tambahpendapatan">
                    <i class="fa fa-user-plus" style="font-size:20px"></i>
                    Tambah Pendapatan </a>
            </div>
            <div class = "col-sm-6">
                <form action="/pendapatan/caripendapatan" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari ID Pegawai" value="{{ old('cari') }}" name="cari">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" value="Cari">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
              </div>
        </div>
    </div>
@endsection
@section('body')
    <br>
    <div class = "container">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>ID Pegawai</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>Gaji</th>
                    <th>Tunjangan</th>
                    <th>Opsi</th>
                </tr>
                @foreach($pendapatan as $pp)
                <tr>
                    <td>{{ $pp->IDPegawai }}</td>
                    <td>{{ $pp->Bulan }}</td>
                    <td>{{ $pp->Tahun }}</td>
                    <td>{{ $pp->Gaji }}</td>
                    <td>{{ $pp->Tunjangan }}</td>
                    <td>

                        <a href="/pendapatan/editpendapatan/{{ $pp->ID }}">
                            <i class="fa fa-pencil" style="font-size:20px"></i>
                            Edit
                        </a>
                        <br>
                        <a href="/pendapatan/hapuspendapatan/{{ $pp->ID }}" style="color:red">
                            <i class="fa fa-trash" style="font-size:20px; color:red" ></i>
                            Hapus
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>
            <br/>
            <div class="row">
            <div class="col" style="text-align: center">
              <div class="card bg-light mb-3 rounded-top justify-content-center" style="max-width: 15rem;max-height: 10rem;">
                <div class="card-header">Total Data Pendapatan</div>
                  <div class="card-body">
                    <p class="card-text">{{ $pendapatan->total() }}</p>
                  </div>
              </div>
            </div>
          </div>
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              {{ $pendapatan->links() }}
              </li>
            </ul>
          </nav>
        </div>
    </div>
    </div>
@endsection
