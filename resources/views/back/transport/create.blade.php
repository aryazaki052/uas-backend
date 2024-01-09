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
                    <form action="{{ route('transport.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label for="judul">Nama Mobil</label>
                            <input type="text" name="nama_mobil" class="form-control" id="text" placeholder="Masukan Judul">
                        </div>
                        <div class="form-group">
                          <label for="kategori">kategori</label>
                          <select name="kategori_id" class="form-control">
                            @foreach ($kategori as $row)
                            <option value="{{ $row->id }}">{{ $row->nama_kategori }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="body">Transmisi</label>
                          <select name="transmisi" class="form-control">
                              <option value="Manual Transmision">Manual Transmission</option>
                              <option value="Automatic Transmision">Automatic Transmission</option>
                          </select>
                        </div>                      
                        <div class="form-group">
                            <label for="body">Harga 1 - 6 Hari</label>
                            <input type="number" name="harga1">
                        </div>
                        <div class="form-group">
                            <label for="body">Harga 7 - 13 Hari</label>
                            <input type="number" name="harga7">
                        </div>
                        <div class="form-group">
                            <label for="body">Harga 14+ Hari</label>
                            <input type="number" name="harga14">
                        </div>
                        <div class="form-group">
                            <label for="body">Deskripsi</label>
                            <textarea name="deskripsi" id="editor" class="form-control" placeholder="Include"></textarea>
                        </div>
                        <div class="form-group" id="gambarFormGroup">
                            <label for="gambar">Gambar Mobil</label>
                            <input type="file" name="gambar_mobil" class="form-control">
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
