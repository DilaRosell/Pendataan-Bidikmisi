@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5"> 

<main class="form-signin">
    <form>
      <h1 class="h3 mb-3 fw-normal text-center">Log in admin</h1>
  
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
      <p class="mt-5 mb-3 text-muted">&copy; Development by</p>
    </form>
  </main>

        </div>
    </div>
    @endsection