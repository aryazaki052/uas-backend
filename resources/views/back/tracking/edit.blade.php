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
                        <div class="card-title">Form Tambah Jalur Tracking</div>
                        <a href="{{ route('tracking.index') }}" class="btn btn-primary btn-sm ml-auto btn-warning">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('tracking.update', $tracking->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="judul">Nama Tracking</label>
                            <input type="text" name="nama" class="form-control" id="text" placeholder="Masukkan Judul" value="{{ $tracking->nama_gunung }}">
                        </div>
                        <div class="form-group">
                            <label for="body">Overview</label>
                            <textarea name="overview" id="editorOverview" class="form-control" placeholder="Berikan Deskripsi Singkat">{{ $tracking->overview }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="body">Activity Highlight</label>
                            <textarea name="act_highlight" id="editorActivity" class="form-control" placeholder="Berikan Deskripsi Singkat">{{ $tracking->act_highlight }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="body">Include</label>
                            <textarea name="include" id="editorInclude" class="form-control" placeholder="Include">{{ $tracking->include }}</textarea>
                        </div>
                        <div class="form-group" id="hargaFormGroup">
                            <label for="harga">Harga</label>
                            <input type="number" name="harga" class="form-control" placeholder="Harga" value="{{ $tracking->price }}">
                        </div>
                        <div class="form-group">
                          <label for="gambar">Gambar Gunung</label>
                          <input type="file" name="gambar_gunung" class="form-control" ></input>
                          <br>
                          <label for="gambar">Gambar Saat Ini</label> <br>
                          <img src="{{ asset('uploads/' .$tracking->gambar_gunung) }}" width="30%">
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
        .create(document.querySelector('#editorOverview'), {
            alignment: {
                options: ['left', 'right', 'justify']
            }
        })
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#editorActivity'), {
            alignment: {
                options: ['left', 'right', 'justify']
            }
        })
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#editorInclude'), {
            alignment: {
                options: ['left', 'right', 'justify']
            }
        })
        .catch(error => {
            console.error(error);
        });
</script>

@endsection
