@extends('template')

@section('judulweb')
    Meja
@endsection

@section('judulhalaman')
    <div class="container">
      <div class="row">
        <div class="col" style="text-align: center">
          <h4>Tabel Meja</h4>
          <p>Tabel Meja Menyajikan Data Tiap Meja</p>
        </div>
      </div>
    </div>

    <div class = "container">
        <div class = "row">
            <div class = "col-sm-6" style="text-align: left">
                <a href="/meja" style="font-size:20px"> <i class="material-icons">&#xe5c4;</i> Kembali</a>
                <br>
                <a href="/meja/tambah">
                    <i class="fa fa-user-plus" style="font-size:20px"></i>
                    Tambah Meja </a>
            </div>
            <div class = "col-sm-6">
                <form action="/meja/cari" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari Merk" value="{{ old('cari') }}" name="cari">
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
			<th>Merk </th>
			<th>Stock</th>
            <th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($meja as $m)
		<tr>
			<td>{{ $m->merkmeja }}</td>
			<td>{{ $m->stockmeja }}</td>
			<td>{{ $m->tersedia }}</td>
            <td>
                <a href="/meja/edit/{{ $m->kodemeja }}">
                    <i class="fa fa-pencil" style="font-size:20px"></i>
                    Edit
                </a>
                <br>
                <a href="/meja/hapus/{{ $m->kodemeja }}" style="color:red">
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
                <div class="card-header">Total Data Meja</div>
                  <div class="card-body">
                    <p class="card-text">{{ $meja->total() }}</p>
                  </div>
              </div>
            </div>
          </div>
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              {{ $meja->links() }}
              </li>
            </ul>
          </nav>
        </div>
    </div>
    </div>
@endsection
