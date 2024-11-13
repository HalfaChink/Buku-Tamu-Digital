@extends('layouts/form')

@section('title')
Buat Akun
@endsection

@section('form-title')
Buat akun admin
@endsection

@section('form')
@if ($errors->has('username'))
<div class="alert alert-danger" role="alert">
    {{ $errors->first('username') }}
</div>
@endif
<form action="{{ route('admin.signup') }}" method="POST">
    @csrf
    <div class="form-outline mb-2">
        <label class="form-label" for="username">Username</label>
        <input type="text" name="username" class="form-control" style="border: 1px solid #FF5A5A" required />
    </div>

    <div class="form-outline mb-2">
        <label class="form-label" for="password">Password</label>
        <input type="password" name="password" class="form-control" style="border: 1px solid #FF5A5A" required />
    </div>

    <div class="d-flex justify-content-end pt-5">
        <button class="btn text-light font-weight-bold" type="submit" style="background-color: rgb(59, 32, 75)">Buat</button>
    </div>
</form>
@endsection