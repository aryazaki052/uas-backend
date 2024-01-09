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
                        <div class="card-title">Form Tambah Tour</div>
                        <a href="{{ route('tour.index') }}" class="btn btn-primary btn-sm ml-auto btn-warning">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('tour.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label for="judul">Nama Tour</label>
                            <input type="text" name="nama" class="form-control" id="text" placeholder="Masukan Judul">
                        </div>
                        <div class="form-group">
                            <label for="body">Deskripsi</label>
                            <textarea name="desk" id="editorOverview" class="form-control" placeholder="Berikan Deskripsi Singkat"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="body">To Do</label>
                            <textarea name="todo" id="editorInclude" class="form-control" placeholder="Include"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="body">Highlight</label>
                            <textarea name="highlight"  class="form-control" placeholder="Berikan Deskripsi Singkat"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="body">Itenary</label>
                            <textarea name="itenary" id="editorActivity" class="form-control" placeholder="Include"></textarea>
                        </div>
                        <div class="form-group" id="gambarFormGroup">
                            <label for="gambar">Harga</label>
                            <input type="number" name="harga" class="form-control" placeholder="Harga">
                        </div>
                        <div class="form-group" id="gambarFormGroup">
                            <label for="gambar">Gambar</label>
                            <input type="file" name="gambar" class="form-control">
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
