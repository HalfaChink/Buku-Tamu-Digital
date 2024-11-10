@extends('layouts/form')

@section('title')
Login Admin
@endsection

@section('form-title')
<h1 class="text-lg text-uppercase font-weight-bold text-dark mb-4">Masuk akun admin</h1>
@endsection

@section('form')
<div data-mdb-input-init class="form-outline mb-2">
  <label class="form-label" for="form3Example3">username</label>
  <input type="text" id="form3Example3" class="form-control" style="border: 1px solid #FF5A5A" />
</div>
<div data-mdb-input-init class="form-outline mb-2">
  <label class="form-label" for="form3Example3">password</label>
  <input type="password" id="form3Example3" class="form-control" style="border: 1px solid #FF5A5A" />
</div>

<div class="d-flex d-md-flex justify-content-md-end pt-5">
  <button class="btn me-md-2 text-light font-weight-bold" type="button" style="background-color: rgb(59, 32, 75)">Login</button>
</div>
@endsection

<body>
  <section class="">
    <x-navback></x-navback>
    <div class="px-5 py-2 px-md-5 text-lg-start pt-5" style="background-color: rgb(59, 32, 75); height: 100vh;">
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0 text-center d-none d-lg-block">
            <img src="{{ asset('admin/img/logotest.png') }}" alt="PT.artristik Studio Bandung" width="400">
          </div>

          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card">
              <div class="card-body py-5 px-md-5">
                <h1 class="text-lg text-uppercase font-weight-bold text-dark ">login admin</h1>

                <form action="{{ route('loginAdmin.submit') }}" method="POST" style="margin-top: 90px;">
                  @csrf
                  <div class="form-outline mb-2">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" style="border: 1px solid #FF5A5A" />
                  </div>

                  <div class="form-outline mb-2">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" style="border: 1px solid #FF5A5A" />
                  </div>

                  <div class="d-flex justify-content-end pt-5">
                    <button class="btn text-light font-weight-bold" type="submit" style="background-color: rgb(59, 32, 75)">Login</button>
                  </div>
                </form>


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