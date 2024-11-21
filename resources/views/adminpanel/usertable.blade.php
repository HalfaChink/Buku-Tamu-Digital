@extends('layouts/app')

@section('title')
Daftar Pengunjung
@endsection

@section('content')
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Daftar Pengunjung</h1>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Pengunjung</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Asal</th>
                                    <th>Email</th>
                                    <th>No. Tlp</th>
                                    <th>Jumlah Pengunjung</th>
                                    <th>Tujuan</th>
                                    <th>Komentar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataPengunjung as $pengunjung)
                                <tr>
                                    <td>{{ $pengunjung->id }}</td>
                                    <td>{{ $pengunjung->nama }}</td>
                                    <td>{{ $pengunjung->asal }}</td>
                                    <td>{{ $pengunjung->email }}</td>
                                    <td>{{ $pengunjung->no_tlp }}</td>
                                    <td>{{ $pengunjung->jumlah_pengunjung }}</td>
                                    <td>{{ $pengunjung->tujuan_detail }}</td>
                                    <td>{{ $pengunjung->komentar }}</td>
                                    <td>
                                        <form action="{{ route('pengunjung.destroy', $pengunjung->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
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

@section('scripts')

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            paging: true,
            searching: true,
            lengthMenu: [10, 25, 50],
            order: [
                [0, 'asc']
            ],
        });
    });
</script>
@endsection

@section('styles')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@endsection