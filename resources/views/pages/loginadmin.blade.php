@extends('layouts/form')

@section('title')
Login Admin
@endsection

@section('form-title')
<h1 class="text-lg text-uppercase font-weight-bold text-dark mb-4 mt-4">Masuk akun admin</h1>
@endsection

@section('form')
@if($errors->has('loginError'))
<div class="alert alert-danger" role="alert">
  {{ $errors->first('loginError') }}
</div>
@endif

<form action="{{ route('login.submit') }}" method="post">
  @csrf
  <div data-mdb-input-init class="form-outline mb-2">
    <label class="form-label" for="username">Username</label>
    <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}" style="border: 1px solid #FF5A5A" />
  </div>

  <div data-mdb-input-init class="form-outline mb-2">
    <label class="form-label" for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control" style="border: 1px solid #FF5A5A" />
  </div>

  <div class="d-flex justify-content-end">
    <button class="btn text-light font-weight-bold" type="submit" style="background-color: rgb(59, 32, 75)">Login</button>
  </div>
</form>
@endsection