@extends('layouts/app')

@section('title')
Daftar Accounts
@endsection

@section('content')
<div id="content">
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Daftar Accounts Admin</h1>

        <!-- Form untuk membuat akun admin baru -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Buat Akun Admin Baru</h6>
            </div>
            <div class="card-body">
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
            </div>
        </div>

        <!-- Tabel Daftar Admin -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Accounts</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($admins as $admin)
                            <tr>
                                <td>{{ $admin->id }}</td>
                                <td>{{ $admin->username }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection