@extends('layouts/form')

@section('title')
Buat Akun
@endsection

@section('form-title')
Buat akun admin
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
    <button class="btn me-md-2 text-light font-weight-bold" type="button" style="background-color: rgb(59, 32, 75)">Buat</button>
</div>
@endsection