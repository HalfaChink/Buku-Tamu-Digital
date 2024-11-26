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

    <style>
        @media screen and (max-width: 576px){
            img{
                width: 150px;
                margin-left: auto;
                margin-right: auto;
            }
            .card{
                border-top-left-radius: 70px;
                border-top-right-radius: 70px;
                height: 78vh;
            }
            .card-body{
                margin-top: 50px;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="button position-absolute row px-4 py-2">
            <a href="{{ route('dashboard') }}" class="btn btn-light btn-sm">Kembali</a>
        </div>
        <div id="forms" class="position-sm d-flex align-items-center position-relative vh-100">
            <div class="row d-flex justify-content-around w-[100%] mx-auto">
                <img class="gmb d-block img-fluid my-5" src="{{ asset('admin/img/logotest.png') }}" alt="PT.artristik Studio Bandung" width="500" style="margin-right: 150px; margin-top: 10px;">
                <div class="card">
                    <div class="card-body bg-light px-5 pt-4">
                        <div>
                            @yield('form-title')
                            @yield('form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


</html>