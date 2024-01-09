@extends('layouts.default')
@section('content')
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
						<div class="card-title">Data Artikel</div>
            <a href="{{ route('tracking.create') }}" class="btn btn-primary btn-sm ml-auto">Tambah</a>
					</div>
          {{-- <div class="dropdown">
            <button id="filterDropdown" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-id="0">
                Filter Kategori
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('artikel.index') }}">Semua Artikel</a></li>
                <li><a class="dropdown-item" href="{{ route('artikel.index', ['kategori_id' => 3]) }}" data-id="3">Berita</a></li>
                <li><a class="dropdown-item" href="{{ route('artikel.index', ['kategori_id' => 2]) }}" data-id="2">Pengumuman</a></li>
            </ul>
          </div> --}}
          
          
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
                      <th>Nama Gunung</th>
                      <th>Overview</th>
                      <th>Highlight</th>
                      <th>Price</th>
                      <th>Gambar</th> <!-- Tambahkan kolom ini -->
                      <th width="150px">Action</th>
                  </tr>
              </thead>
              <tbody>
                  @forelse ($tracking as $row)
                  <tr>
                      <td style="max-width: 20px;">{{ $row->nama_gunung }}</td>
                      <td><p>{!! $row->overview !!}</p></td>
                      <td><p>{!! $row->act_highlight !!}</p></td>
                      <td > Rp. {{ $row->price }}</td>
                      <td><img src="{{ asset('uploads/' .$row->gambar_gunung) }}" width="100"></td>
                      <td>
                        <a href="{{ route('tracking.edit', $row->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pen"></i></a>
                        <form action="{{ route('tracking.destroy', $row->id) }}" method="POST" class="d-inline" onsubmit="return confirmDelete();">
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
