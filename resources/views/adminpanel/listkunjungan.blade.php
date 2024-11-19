@extends('layouts/app')

@section('title')
Daftar Kunjungan
@endsection

@section('content')
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Daftar Kunjungan</h1>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Kunjungan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Tanggal</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No.Tlp</th>
                                    <th>Asal</th>
                                    <th>Jumlah Pengunjung</th>
                                    <th>Tujuan</th>
                                    <th>Komentar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataPengunjung as $pengunjung)
                                <tr>
                                    <td>{{ $kunjungan->id }}</td>
                                    <td>{{ $kunjungan->tgl }}</td>
                                    <td>{{ $kunjungan->nama }}</td>
                                    <td>{{ $kunjungan->email }}</td>
                                    <td>{{ $kunjungan->no_tlp }}</td>
                                    <td>{{ $kunjungan->asal }}</td>
                                    <td>{{ $kunjungan->jumlah_pengunjung }}</td>
                                    <td>{{ $kunjungan->tujuan }}</td>
                                    <td>{{ $kunjungan->komentar }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection