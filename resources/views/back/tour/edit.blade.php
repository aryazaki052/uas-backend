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
                    <form action="{{ route('tour.update', $tour->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama Tour</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Judul" value="{{ $tour ->judul }}">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="desk" id="editorOverview" class="form-control" placeholder="Berikan Deskripsi Singkat">{{ $tour->desk }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="todo">To Do</label>
                            <textarea name="todo" id="editorInclude" class="form-control" placeholder="Include">{{ $tour->to_do }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="highlight">Highlight</label>
                            <textarea name="highlight"  class="form-control" placeholder="Berikan Deskripsi Singkat">{{ $tour->highlight }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="itenary">Itinerary</label>
                            <textarea name="itenary" id="editorActivity" class="form-control" placeholder="Include">{{ $tour->itinerary }}</textarea>
                        </div>
                        <div class="form-group" id="hargaFormGroup">
                            <label for="harga">Harga</label>
                            <input type="number" name="harga" class="form-control" placeholder="Harga"value="{{ $tour ->harga }}">
                        </div>
                        <div class="form-group" id="gambarFormGroup">
                            <label for="gambar">Gambar</label>
                            <input type="file" name="gambar" class="form-control">
                            <br>
                            <label for="gambar">Gambar Saat Ini</label> <br>
                            <img src="{{ asset('uploads/' .$tour->gambar_tour) }}" width="30%">
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
