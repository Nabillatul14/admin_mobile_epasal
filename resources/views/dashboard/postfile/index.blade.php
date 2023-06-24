@extends('dashboard.layouts.main')


@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Postingan Anda </h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-11" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-11">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3 mt-2">Create New Post File</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Kategori Luar</th>
                    <th scope="col">Kategori Dalam</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($postfile as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->kategori_luar }}</td>
                        <td>{{ $post->kategori_dalam }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>
                            {{-- <a href="http://127.0.0.1:8000{{ Storage::($post->data_file) }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a> --}}

                            <a href="/storage/{{ $post->data_file }}" class="badge bg-info" target="blank"><span
                                    data-feather="eye"></span></a>

                            <a href="/dashboard/posts/{{ $post->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>

                            {{-- <a href="{{ asset('storage/public/data-file/' . $post->data_file) }}">{{ $post->title }}</a> --}}


                            {{-- <form action="/dashboard/posts/{{ $post->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('apakah anda yakin ingin menghapus data??')"><span
                                        data-feather="trash"></span></button>
                            </form> --}}

                            {{-- <form action="/dashboard/post/{{ $post->id }}/hapus" method="POST"
                                class="d-inline">
                                @csrf
                                <button class="btn btn-danger"><i class="fa fa-trash fa-lg"></i></button>
                            </form> --}}
                            <form action="/dashboard/posts/{{ $post->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('apakah anda yakin ingin menghapus data??')"><span
                                        data-feather="trash"></span></button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
