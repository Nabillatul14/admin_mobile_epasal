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
        {{-- <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                value="{{ old('slug', $post->slug) }}">
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div> --}}

        {{-- <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <select class="form-select" name="category_id">
                @foreach ($categories as $category)
                    @if (old('category_id', $post->category_id) == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
        </div> --}}

        {{-- <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                name="image">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div> --}}

        {{-- <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
            <trix-editor input="body"></trix-editor>
            @error('body')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div> --}}

        <label for="file" class="form-label">Kategori Luar</label>
        <select class="form-select mb-3" aria-label="Default select example" name="kategori_luar">
            <option value="1" {{ $postfile->kategori_luar == 1 ? 'selected' : '' }}>Pemilu</option>
            <option value="1" {{ $postfile->kategori_luar == 2 ? 'selected' : '' }}>Pemilihan</option>
            </select>

        <label for="file" class="form-label">Kategori Dalam</label>

        
            <select class="form-select mb-3" aria-label="Default select example" name="kategori_dalam">
                <option value="1" {{ $postfile->kategori_dalam == 1 ? 'selected' : '' }}>Undang Undang Pemilu</option>
                <option value="1" {{ $postfile->kategori_dalam == 2 ? 'selected' : '' }}>PERBAWASLU</option>
            </select>
        

        <div class="mb-3">
            <label for="file" class="form-label">Post File</label>
            <input class="form-control @error('data_file') is-invalid @enderror" type="file" id="data_file"
                name="data_file" value="{{ $postfile->data_file }}">
        </div>

        <button type="submit" class="btn btn-primary mb-5">Update Post</button>
    </form>
</div>@endsection