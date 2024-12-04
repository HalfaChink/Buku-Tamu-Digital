<!DOCTYPE html>
<html lang="en" class="overflow-hidden">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/img/logo.png') }}" type="image/x-icon">
    <!-- Custom styles for this template-->
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    @vite('resources/css/form.css')
    <title>
        @yield('title')
    </title>
    <style>
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            z-index: 999;
        }

        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .popup-content p {
            margin: 0;
            font-size: 16px;
        }

        #popup-close {
            margin-top: 10px;
        }

        @media screen and (max-width: 576px) {
            img {
                width: 150px;
                margin-left: auto;
                margin-right: auto;
            }

            .card {
                border-top-left-radius: 70px;
                border-top-right-radius: 70px;
                height: 78vh;
            }

            .card-body {
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const closeButton = document.getElementById('popup-close');
            const popupOverlay = document.getElementById('popup-overlay');
            const popupAlert = document.getElementById('popup-alert');

            if (closeButton) {
                closeButton.addEventListener('click', function() {
                    popupOverlay.style.display = 'none';
                    popupAlert.style.display = 'none';
                });
            }
        });
    </script>

</body>

</html>