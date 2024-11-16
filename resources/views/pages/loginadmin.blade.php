@extends('layouts/form')

@section('title')
Login Admin
@endsection

@section('form-title')
<h1 class="text-lg text-uppercase font-weight-bold text-dark mb-4">Masuk akun admin</h1>
@endsection

@section('form')
@if($errors->has('loginError'))
<div class="alert alert-danger" role="alert">
  {{ $errors->first('loginError') }}
</div>
@endif

<form action="{{ route('login.submit') }}" method="POST" style="margin-top: 90px;">
  @csrf
  <div data-mdb-input-init class="form-outline mb-2">
    <label class="form-label" for="username">Username</label>
    <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}" style="border: 1px solid #FF5A5A" />
  </div>

  <div data-mdb-input-init class="form-outline mb-2">
    <label class="form-label" for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control" style="border: 1px solid #FF5A5A" />
  </div>

  <div class="d-flex justify-content-end pt-5">
    <button class="btn text-light font-weight-bold" type="submit" style="background-color: rgb(59, 32, 75)">Login</button>
  </div>
</form>

@endsection

<body>
  <section class="">
    <x-navback></x-navback>
    <div class="container">
      <div class="pt-5 -px-1" style="background-color: rgb(59, 32, 75); height: 100vh;">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0 text-center d-none d-lg-block">
            <img src="{{ asset('admin/img/logotest.png') }}" alt="PT.artristik Studio Bandung" width="400">
          </div>

          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card">
              <div class="card-body py-5 px-md-5">
                <h1 class="text-lg text-uppercase font-weight-bold text-dark ">login admin</h1>
                @yield('form')

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- bootstrap --}}
  <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>