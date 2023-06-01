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
            <form action="/login" method="POST">
              @csrf
              <img class="mb-4" src="images/LOGOBAWASLU.png" alt="" width="290" height="130">
              <h1 class="h3 mb-3 fw-normal text-center">Silahkan Login</h1>
          
              <div class="form-floating">
                <input name="username" type="text" class="form-control" id="username" placeholder="username">
                <label for="username">Username</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
          
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
             
            </form>
          </main>

        </div>
    </div>


@endsection 

