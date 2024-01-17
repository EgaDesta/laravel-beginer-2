@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif  

            @if (session()->has('loginEror'))
                <div class="alert alert-denger alert-dismissible fade show" role="alert">
                    {{ session('loginEror') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif  
            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                <form action="/login" method="post">
                  @csrf

                  <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" placeholder="Email" value="{{ old('email', 'name@example.com') }}" autofocus required value="{{ old('email') }}">
                    <label for="email">Email</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-floating">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                        id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                

                  {{-- <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" placeholder="Email" value="{{ old('email', 'name@example.com') }}" autofocus>
                    <label for="email">Email</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                

              </div>
              <div class="form-floating">
                        <input type="password" name="password"
                            id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> --}}
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                  </form>
                  <small class="d-block text-center mt-3">
                    not register?<a href="/register">Register Now!!</a>
                  </small>
                </main>
              </div>
            </div>
            @endsection
            
            {{-- <div class="form-floating">
                <input type="email" name="email" class="form-control "
                    id="email" placeholder="Email"required value="name@example.com" @error('email') is-invalid @enderror autofocus required>
                <label for="email">Email</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror --}}