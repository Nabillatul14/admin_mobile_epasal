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

          @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          <main class="form-signin w-100 m-auto">
            <form action="/login" method="post">
              @csrf
              <img class="mb-4" src="images/LOGOBAWASLU.png" alt="" width="290" height="130">
              <h1 class="h3 mb-3 fw-normal text-center">Login Halaman Admin</h1>
          
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
          
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
             
            </form>
          </main>

        </div>
    </div>


@endsection 

