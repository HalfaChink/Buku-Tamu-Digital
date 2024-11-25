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
    <label class="form-label" for="nama">Nama</label>
    <input type="text" name="nama" id="nama" class="form-control" style="border: 1px solid #FF5A5A" required />
  </div>
  <div data-mdb-input-init class="form-outline mb-2">
    <label class="form-label" for="asal">Asal</label>
    <input type="text" name="asal" id="asal" class="form-control" style="border: 1px solid #FF5A5A" required />
  </div>
  <div data-mdb-input-init class="form-outline-danger mb-2">
    <label class="form-label" for="email">Email</label>
    <input type="email" name="email" id="email" class="form-control" style="border: 1px solid #FF5A5A" required />
  </div>
  <div data-mdb-input-init class="form-outline mb-2">
    <label class="form-label" for="no_tlp">NO.TLP</label>
    <input type="number" name="no_tlp" id="no_tlp" class="form-control" style="border: 1px solid #FF5A5A " required />
  </div>
  <div data-mdb-input-init class="form-outline mb-4">
    <label class="form-label" for="jumlah_pengunjung">Jumlah Pengunjung</label>
    <input type="number" name="jumlah_pengunjung" id="jumlah_pengunjung" class="form-control" style="border: 1px solid #FF5A5A" required />
  </div>
  <div data-mdb-input-init class="form-outline mb-2">
    <label for="exampleFormControlTextarea1" class="form-label">Tujuan</label>
    <textarea class="form-control" name="tujuan_detail" id="exampleFormControlTextarea1" rows="3" style="border: 1px solid #FF5A5A" required></textarea>
  </div>
  <div data-mdb-input-init class="form-outline-danger mb-2">
    <label for="exampleFormControlTextarea1" class="form-label">Komentar</label>
    <textarea class="form-control" name="komentar" id="exampleFormControlTextarea1" rows="3" style="border: 1px solid #FF5A5A" required></textarea>
  </div>
  <div class="d-flex justify-content-end">
    <button class="btn me-md-2 text-light font-weight-bold" type="submit" style="background-color: rgb(59, 32, 75); margin: 20px;"><a class="text-decoration-none text-light">Submit</a></button>
  </div>
</form>
@endsection