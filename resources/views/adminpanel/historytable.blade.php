@extends('layouts.app')

@section('title')
Sejarah Kunjungan
@endsection

@section('content')

<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Sejarah Kunjungan</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Kunjungan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tanggal</th>
                                <th>Tujuan</th>
                                <th>Komentar</th>
                            </tr>
                        </thead>
                        <tbody>
{{-- 
@foreach($dataPerjalanan as $kunjungan)
<tr>
    <td>{{ $kunjungan->id }}</td>
    <td>{{ $kunjungan->tanggal }}</td>
    <td>{{ $kunjungan->tujuan }}</td>
    <td>{{ $kunjungan->komentar }}</td>
</tr>
@endforeach
--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection
