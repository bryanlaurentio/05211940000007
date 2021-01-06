@extends('template')

@section('judulweb')
    Pegawai
@endsection

@section('judulhalaman')
    <div class="container">
      <div class="row">
        <div class="col" style="text-align: center">
          <h4>Tabel Pegawai</h4>
          <p>Tabel Pegawai Menyajikan Data Tiap Pegawai</p>
        </div>
      </div>
    </div>

    <div class = "container">
        <div class = "row">
            <div class = "col-sm-6" style="text-align: left">
                <a href="/pegawai" style="font-size:20px"> <i class="material-icons">&#xe5c4;</i> Kembali</a>
                <br>
                <a href="/pegawai/tambah">
                    <i class="fa fa-user-plus" style="font-size:20px"></i>
                    Tambah Pegawai </a>
            </div>
            <div class = "col-sm-6">
                <form action="/pegawai/cari" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari Nama" value="{{ old('cari') }}" name="cari">
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
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>

            <td>

                <a href="/pegawai/edit/{{ $p->pegawai_id }}">
                    <i class="fa fa-pencil" style="font-size:20px"></i>
                    Edit
                </a>
                <br>
                <a href="/pegawai/hapus/{{ $p->pegawai_id }}" style="color:red">
                    <i class="fa fa-trash" style="font-size:20px; color:red" ></i>
                    Hapus</a>

            </td>
		</tr>
		@endforeach
            </table>
            <br/>
            <div class="row">
            <div class="col" style="text-align: center">
              <div class="card bg-light mb-3 rounded-top justify-content-center" style="max-width: 15rem;max-height: 10rem;">
                <div class="card-header">Total Data pegawai</div>
                  <div class="card-body">
                    <p class="card-text">{{ $pegawai->total() }}</p>
                  </div>
              </div>
            </div>
          </div>
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              {{ $pegawai->links() }}
              </li>
            </ul>
          </nav>
        </div>
    </div>
    </div>
@endsection
