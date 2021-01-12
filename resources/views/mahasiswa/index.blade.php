@extends('template')

@section('judulweb')
    Mahasiswa
@endsection

@section('judulhalaman')
    <div class="container">
      <div class="row">
        <div class="col" style="text-align: center">
          <h4>Tabel Mahasiswa</h4>
          <p>Tabel Mahasiswa Menyajikan Data Tiap-tiap Mahasiswa</p>
        </div>
      </div>
    </div>

    <div class = "container">
        <div class = "row">
            <div class = "col-sm-6" style="text-align: left">
                <a href="/mahasiswa" style="font-size:20px"> <i class="material-icons">&#xe5c4;</i> Kembali</a>
                <br>
                <a href="/mahasiswa/tambah">
                    <i class="fa fa-user-plus" style="font-size:20px"></i>
                    Tambah Mahasiswa </a>
            </div>
            <div class = "col-sm-6">
                <form action="/mahasiswa/cari" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari Nama Mahasiswa" value="{{ old('cari') }}" name="cari">
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
			<th>NRP </th>
			<th>Nama</th>
            <th>Jurusan</th>
            <th>IPK</th>
            <th>Opsi</th>
		</tr>
		@foreach($mahasiswa as $m)
		<tr>
			<td>{{ $m->NRP }}</td>
			<td>{{ $m->Nama }}</td>
            <td>{{ $m->Jurusan }}</td>
            <td>{{ $m->IPK }}</td>
            <td>
                <a href="/mahasiswa/hapus/{{ $m->NRP }}" style="color:red">
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
                <div class="card-header">Total Data Mahasiswa</div>
                  <div class="card-body">
                    <p class="card-text">{{ $mahasiswa->total() }}</p>
                  </div>
              </div>
            </div>
          </div>
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              {{ $mahasiswa->links() }}
              </li>
            </ul>
          </nav>
        </div>
    </div>
    </div>
@endsection
