@extends('layouts.default')
@section('content')
<div>
  <!-- jQuery (jika digunakan) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
  <!-- Bootstrap Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
  
  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</div>
<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
		</div>
	</div>
</div>
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Data Transport</div>
            <a href="{{ route('transport.create') }}" class="btn btn-primary btn-sm ml-auto">Tambah</a>
					</div>
          <div class="dropdown">
            <button id="filterDropdown" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-id="0">
                Filter Kategori
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('transport.index') }}">Semua transport</a></li>
                <li><a class="dropdown-item" href="{{ route('transport.index', ['kategori_id' => 1]) }}" data-id="1">Self Drive</a></li>
                <li><a class="dropdown-item" href="{{ route('transport.index', ['kategori_id' => 2]) }}" data-id="2">With Driver</a></li>
            </ul>
          </div>
          
          
				</div>
        
				<div class="card-body">
          @if (session()->has('success'))
          <div class="alert alert-primary">
              {{ session('success') }}
          </div>
          @endif
      
					<div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                  <tr class="text-center">
                      <th>Nama Mobil</th>
                      <th>Kategori</th>
                      <th>Transmisi</th>
                      <th>Harga 1 - 6 Hari </th>
                      <th>Harga 7 - 13 Hari </th>
                      <th>Harga 14+ Hari </th>
                      {{-- <th>Deskripsi </th> --}}
                      <th>Gambar</th> <!-- Tambahkan kolom ini -->
                      <th width="150px">Action</th>
                  </tr>
                  <tr>
                    
                  </tr>
              </thead>
              <tbody>
                  @forelse ($transport as $row)
                  <tr>
                      <td style="max-width: 20px;">{{ $row->nama_mobil }}</td>
                      <td>{{ $row->kategori->nama_kategori }}</td>
                      <td>{{ $row->transmisi }}</td>
                      <td>{{ $row->harga_1_6_hari }}</td>
                      <td>{{ $row->harga_7_13_hari }}</td>
                      <td>{{ $row->harga_14_hari }}</td>
                      {{-- <td>{!! $row->deskripsi_mobil !!}</td> --}}
                      <td><img src="{{ asset('uploads/' .$row->gambar_mobil) }}" width="100"></td>
                      <td>
                        <a href="{{ route('transport.edit', $row->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pen"></i></a>
                        <form action="{{ route('transport.destroy', $row->id) }}" method="POST" class="d-inline" onsubmit="return confirmDelete();">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"> </i>
                          </button>
                        </form>
                      </td>
                  </tr>
                  @empty
                  <tr>
                      <td colspan="7" class="text-center">Data Masih Kosong</td>
                  </tr>
                  @endforelse
              </tbody>
          </table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<script>
  function confirmDelete() {
      return confirm("Apakah Anda yakin akan menghapusnya?");
  }
</script>

@endsection
