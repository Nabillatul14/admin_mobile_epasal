@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/posts" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <label for="file" class="form-label">Kategori Luar</label>
            <select class="form-select mb-3" aria-label="Default select example" name="kategori_luar">
                <option value="1">Pemilu</option>
                <option value="2">Pemilihan</option>
            </select>

            <label for="file" class="form-label">Kategori Dalam</label>

            <select class="form-select mb-3" aria-label="Default select example" name="kategori_dalam">
                <option value="1">Undang Undang Pemilu</option>
                <option value="2">PERBAWASLU</option>
                <option value="3">Keputusan BAWASLU</option>
            </select>

            <div class="mb-3">
                <label for="file" class="form-label">Upload File</label>
                <input class="form-control @error('data_file') is-invalid @enderror" type="file" id="data_file"
                    name="data_file">
            </div>

            <button type="submit" class="btn btn-primary mb-5">Create Post</button>
        </form>
    </div>
    <script>
        const title = document.querySelector('#title');
        const slugs = document.querySelector('#slug');
        title.addEventListener('change', function() {
            fetch('/dasboard/posts/checkSlug?title=' + title.value + '')
                .then(response => response.json())
                .then(data => slugs.value = data.slug)
            console.log(data.slug);
        });
        document.addEventListener('trix-file-accept', function(e) {
            e.preventdefault();
        })
    </script>
@endsection
