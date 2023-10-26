@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Post</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/posts/{{ $postfile->id }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ $postfile->title }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <label for="kategori_luar" class="form-label">Kategori Luar</label>
            <select class="form-select mb-3" aria-label="Default select example" name="kategori_luar">
                <option value="1" {{ $postfile->kategori_luar == 1 ? 'selected' : '' }}>Pemilu</option>
                <option value="2" {{ $postfile->kategori_luar == 2 ? 'selected' : '' }}>Pemilihan</option>
            </select>
            <label for="kategori_dalam" class="form-label">Kategori Dalam</label>
            <select class="form-select mb-3" aria-label="Default select example" name="kategori_dalam">
                <option value="1" {{ $postfile->kategori_dalam == 1 ? 'selected' : '' }}>Undang Undang Pemilu
                </option>
                <option value="2" {{ $postfile->kategori_dalam == 2 ? 'selected' : '' }}>PERBAWASLU</option>
                <option value="3" {{ $postfile->kategori_dalam == 3 ? 'selected' : '' }}>Keputusan BAWASLU</option>
            </select>
            <div class="mb-3">
                <label for="data_file" class="form-label">Upload File</label>
                <a href="/storage/{{ $postfile->data_file }}">{{ $postfile->title }}</a>
                <input class="form-control @error('data_file') is-invalid @enderror" type="file" id="data_file"
                    name="data_file">
                @error('data_file')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-5">Update Post</button>
        </form>
    </div>
@endsection
