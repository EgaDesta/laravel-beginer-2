@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registrattion</h1>
            <form>
              <div class="form-floating">
                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                <label for="name">Name</label>
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                <label for="user"> User Name</label>
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="email">Email</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="Password" placeholder="password">
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">
                alredy register?<a href="/register">Login</a>
            </small>
          </main>
    </div>
</div>
@endsection