@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5"> 

<main class="form-signin">
  
    <form method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
      
      <h1 class="h3 mb-3 fw-normal text-center">LOGIN MAHASISWA - SIMBIMI</h1>
  
      
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="email" value="{{ old('email') }}" placeholder="name@example.com" required>
        <label for="floatingInput">Email</label>
        @if ($errors->has('email'))
           <span class="help-block">
               <strong>{{ $errors->first('email') }}</strong>
           </span>
       @endif
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
        @if ($errors->has('password'))
           <span class="help-block">
               <strong>{{ $errors->first('password') }}</strong>
           </span>
       @endif
      </div>
      <link rel ="web-saya\resources\views\layouts\welcome.blade.php">
      <button class="w-100 btn btn-lg btn-primary" type="submit">Login </button>
      
      <p class="mt-5 mb-3 text-muted">Copyright &copy; 2021 SIMBIMI</p>
    </form>
  </main>

        </div>
    </div>
    @endsection