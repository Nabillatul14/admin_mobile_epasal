@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4">
          
          @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                 {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
          @if(session()->has('LoginEror'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 {{ session('LoginEror') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

            <main class="form-signin w-100 m-auto">
                <img src="/images/LOGOBAWASLU.png" class="img-fluid mb-3" alt="Responsive image">
                <h1 class="h3 mb-3 fw-normal text-center">Please Register</h1>
                <form action="/login" method="post">
                  @csrf
                  <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control " id="email" placeholder="name@example.com" autofocus  value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                        
                    @enderror
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" >
                    <label for="password">Password</label>
                  </div>
                  <button class="w-100 btn btn-lg btn-primary" type="submit"><a href="/login/index"></a> Login Now</button>
                </form>
              </main>
        </div>
    </div>

@endsection 