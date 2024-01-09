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
                        <div class="card-title">Form Tambah Transport</div>
                        <a href="{{ route('transport.index') }}" class="btn btn-primary btn-sm ml-auto btn-warning">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('transport.update', $transport->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="judul">Nama Mobil</label>
                            <input type="text" name="nama_mobil" class="form-control" id="text" placeholder="Masukan Judul" value="{{ $transport->nama_mobil }}">
                        </div>
                        <div class="form-group">
                          <label for="kategori">Kategori</label>
                          <select name="kategori_id" class="form-control">
                            @foreach ($kategori as $row)
                            @if ($row->id == $transport->kategori_id)
                            <option value="{{ $row->id }}" selected>{{ $row->nama_kategori }}</option>
                            @else
                            <option value="{{ $row->id }}">{{ $row->nama_kategori }}</option>
                            @endif
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="body">Transmisi</label>
                          <select name="transmisi" class="form-control">
                              <option value="Manual Transmision" {{ $transport->transmisi == 'manual' ? 'selected' : '' }}>Manual Transmission</option>
                              <option value="Automatic Transmision" {{ $transport->transmisi == 'matic' ? 'selected' : '' }}>Automatic Transmission</option>
                          </select>
                        </div>
                        <div class="form-group">
                            <label for="body">Harga 1 - 6 Hari</label>
                            <input type="number" name="harga1" value="{{ $transport->harga_1_6_hari }}">
                        </div>
                        <div class="form-group">
                            <label for="body">Harga 7 - 13 Hari</label>
                            <input type="number" name="harga7" value="{{ $transport->harga_7_13_hari }}">
                        </div>
                        <div class="form-group">
                            <label for="body">Harga 14+ Hari</label>
                            <input type="number" name="harga14" value="{{ $transport->harga_14_hari }}">
                        </div>
                        <div class="form-group">
                            <label for="body">Deskripsi</label>
                            <textarea name="deskripsi" id="editor" class="form-control" placeholder="Include">{{ $transport->deskripsi_mobil }}</textarea>
                        </div>
                        <div class="form-group" id="gambarFormGroup">
                            <label for="gambar">Gambar Mobil</label>
                            <input type="file" name="gambar_mobil" class="form-control">
                            <br>
                            <label for="gambar">Gambar Saat Ini</label> <br>
                            <img src="{{ asset('uploads/' .$transport->gambar_mobil) }}" width="30%">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit">Save</button>
                            <button class="btn btn-danger btn-sm" type="reset">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>

    ClassicEditor
        .create(document.querySelector('#editor'), {
            alignment: {
                options: ['left', 'right', 'justify']
            }
        })
        .catch(error => {
            console.error(error);
        });
</script>

@endsection
