<!DOCTYPE html>
<html lang="en" class="overflow-hidden">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Custom styles for this template-->
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/form.css')
    <title>
        @yield('title')
    </title>
</head>

<body>
    <!-- <div class="">   
    
    <div class="container">
            <a href="" class="btn btn-light btn-sm">Kembali</a>
        </div>
        <div class="row vh-100 d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none text-center">
                <img src="{{ asset('admin/img/logotest.png') }}" alt="PT.artristik Studio Bandung" width="400">
            </div>
            <div class="col-md-5 mb-5">
                <div class="card">
                    <div class="card-body py-3 px-md-5">
                        <h2>
                        @yield('form-title') 
                        </h2>
                        <form action="{{ route('pengunjung.store') }}" method="POST">
                            @csrf
                            @yield('form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="container-fluid">
        <div class="button position-absolute row px-5 py-2">
            <a href="" class="btn btn-light btn-md">Kembali</a>
        </div>
        <div class="position-sm d-flex align-items-center position-relative vh-100">
            <div class="row d-flex justify-content-around w-100">
                <img class="d-none d-lg-inline" src="{{ asset('admin/img/logotest.png') }}" alt="PT.artristik Studio Bandung" width="500">
                <div class="card">
                    <div class="card-body bg-light p-5">
                        @yield('form-title')
                        <form action="{{ route('pengunjung.store') }}" method="POST">
                            @csrf
                            @yield('form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>