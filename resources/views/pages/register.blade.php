@extends('layouts/form')

@section('title')
Masukan Detail Kunjungan
@endsection

@section('form-title')
<h1 class="text-lg text-uppercase font-weight-bold text-dark mb-4">Masukan Detail Kunjungan</h1>
@endsection

@section('form')
<form method="post" action="{{ route('pengunjung.store') }}">
  @csrf
  <div data-mdb-input-init class="form-outline mb-2">
    <label class="form-label text-dark" for="nama">Nama <span class="text-danger">*</span></label>
    <input type="text" name="nama" id="nama" class="form-control" style="border: 1px solid #808080" required />
  </div>
  <div data-mdb-input-init class="form-outline mb-2">
    <label class="form-label text-dark" for="asal">Instansi <span class="text-danger">*</span></label>
    <input type="text" name="asal" id="asal" class="form-control" style="border: 1px solid #808080" required />
  </div>
  <div data-mdb-input-init class="form-outline-danger mb-2">
    <label class="form-label text-dark" for="email">Email <span class="text-danger">*</span></label>
    <input type="email" name="email" id="email" class="form-control" style="border: 1px solid #808080" required />
  </div>
  <div data-mdb-input-init class="form-outline mb-2">
    <label class="form-label text-dark" for="no_tlp">NO.TLP <span class="text-danger">*</span></label>
    <input type="number" name="no_tlp" id="no_tlp" class="form-control" style="border: 1px solid #808080" required />
  </div>
  <div data-mdb-input-init class="form-outline mb-4">
    <label class="form-label text-dark" for="jumlah_pengunjung">Jumlah Pengunjung <span class="text-danger">*</span></label>
    <input type="number" name="jumlah_pengunjung" id="jumlah_pengunjung" class="form-control" style="border: 1px solid #808080" required />
  </div>
  <div data-mdb-input-init class="form-outline mb-2">
    <label for="exampleFormControlTextarea1" class="form-label text-dark">Tujuan <span class="text-danger">*</span></label>
    <textarea class="form-control" name="tujuan_detail" id="exampleFormControlTextarea1" rows="3" style="border: 1px solid #808080" required></textarea>
  </div>
  <div data-mdb-input-init class="form-outline-danger mb-2">
    <label for="exampleFormControlTextarea1" class="form-label text-dark">Komentar</label>
    <textarea class="form-control" name="komentar" id="exampleFormControlTextarea1" rows="3" style="border: 1px solid #808080"></textarea></div>
  <div class="d-flex justify-content-end">
    <button class="btn me-md-2 text-light font-weight-bold" type="submit" style="background-color: #808080; margin: 20px;"><a class="text-decoration-none text-light">Submit</a></button>
  </div>
</form>
@if (session('success') || session('error'))
<div id="popup-overlay" class="overlay"></div>
<div id="popup-alert" class="popup">
  <div class="popup-content">
    @if (session('success'))
    <p class="text-success">{{ session('success') }}</p>
    @endif
    @if (session('error'))
    <p class="text-danger">{{ session('error') }}</p>
    @endif
    <button id="popup-close" class="btn btn-primary">Close</button>
  </div>
</div>
@endif

@endsection