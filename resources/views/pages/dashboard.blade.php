<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('./sass/dashboard.scss') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: 'poppins';
        }

        #tabel {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
        }

        #tabel th,
        #tabel td {
            padding: 10px;
            text-align: center;
            border: 2px solid #3b204b;
            font-weight: 500;
        }

        #tabel th {
            background-color: #FF5A5A;
            color: white;
        }

        #tabel td {
            background-color: white;
        }

        #tabel th:first-child,
        #tabel td:first-child {
            background-color: #FF5A5A;
            color: white;
            width: 10%;
        }

        #tabel th:nth-child(2),
        #tabel td:nth-child(2) {
            width: 45%;
            background-color: white;
            color: #3B1F4B;
        }

        #tabel th:nth-child(3),
        #tabel td:nth-child(3) {
            width: 45%;
            background-color: white;
            color: #3B1F4B;
        }

        .comment-card {
            background-color: #f8f9fa;
            border-radius: 15px;
            padding: 20px;
            border: 1px solid #FF5A5A;
        }
        
         .card-body button h6{
            width: 100%;
            font-size: 12px;
            font-weight: bold;
            text-align: center;
            color: #f8f9fa;
         }  
        @media screen and (max-width: 576px) {
            #tabel {
                width: 100%;
            }

            #tabel th:first-child,
            #tabel td:first-child {
                width: 5%;
            }

            #tabel th:nth-child(2),
            #tabel td:nth-child(2) {
                width: 15%;
            }

            /* #tabel th:nth-child(3), */
            #tabel td:nth-child(3) {
                width: 15%;
            }

            #hari-ini p {
                font-size: 13px;
            }

            th {
                font-size: 10px;
            }

            #title {
                margin-bottom: 20px;
            }
            .card-body button{
           
            }
            .card{
                width: 300px;
                margin-left: auto;
                margin-right: auto;
            }
        }
    </style>
</head>


<body>
    <!-- Header -->
    <section id="header">

        <!-- Navbar  -->
        <nav class="navbar navbar-expand-lg p-3">
            <div class="container-fluid border-1 border-bottom py-2">
                <h1 class="navbar-brand text-dark fs-4">Buku Tamu</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="text-dark">Menu</span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light px-3 py-2" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false"
                                style="background-color: rgb(59, 32, 75); border-radius: 15px;">
                                Menu
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('login') }}">Login Admin</a></li>
                                <li><a class="dropdown-item" href="#content">Kunjungan Hari Ini</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero -->
        <div class="container">

            <!-- Carousell -->
            <div id="image" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    @foreach($carouselImages as $index => $carousel)
                    <button type="button" data-bs-target="#image" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $index + 1 }}"></button>
                    @endforeach
                </div>
                <div class="carousel-inner shadow-lg p-0 rounded-3 border mx-auto" style="max-width: 80%; height: auto;">
                    @foreach($carouselImages as $index => $carousel)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img src="{{ asset('admin/img/' . $carousel->image) }}" class="d-block w-100" alt="carousel image" style="height: auto; max-height: 500px; ">
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#image" data-bs-slide="prev">
                    <span aria-hidden="true">
                        <i style="color: #3B1F4B; margin-left: -30px;" class="bx bx-chevron-left bx-lg"></i>
                    </span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#image" data-bs-slide="next">
                    <span aria-hidden="true">
                        <i style="color: #3B1F4B; margin-right: -30px;" class="bx bx-chevron-right bx-lg"></i>
                    </span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="d-flex justify-content-center m-5">
                <a class="btn text-light" href="{{ route('register') }}" role="button"
                    style="background-color: #3b1f4b;">
                    <h3 class="fs-5">Berkunjung</h3>
                </a>
            </div>
        </div>

        <!-- Register -->
    </section>

    <!-- Content -->
    <section id="content">
        <!-- Kunjungan hari ini -->
        <div id="hari-ini" class="p-5" style="background-color: #3b1f4b; color: #FFB91E;">
            <div class="container">
                <div class="d-flex fs-4 justify-content-between ">
                    <p class="fw-bold">Kunjungan Hari Ini</p>
                    <p class="fw-bold">{{ \Carbon\Carbon::now()->format('d F Y') }}</p>
                </div>
                <table id="tabel" class="mx-auto bg-white m-4" style="color: #3b1f4b;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tujuan Kunjungan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($todayVisitors as $index => $visitor)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $visitor->nama }}</td>
                            <td>{{ $visitor->tujuan_detail }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Kunjungan sebelumnya -->
    <div class="container mt-5">
        <h2 class="fs-4 fw-bold">Siapa Saja Yang Pernah <br />Berkunjung</h2>
        <div id="kunjungan" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($previousVisitors as $index => $visitor)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <div class="row justify-content-center my-3">
                        <div class="col-sm-3 sm-md-5">
                            <div class="card shadow">
                                <img src="{{ asset('admin/img/' . $visitor->image) }}" class="card-img-top" alt="Card {{ $index + 1 }}">
                                <hr>
                                <div class="card-body">
                                    <button type="button" class="btn px-5" style="background-color: #3b1f4b"><h6>{{ $visitor->visit_text }}</h6></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- Komentar -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Komentar Pengunjung Hari Ini</h2>
        <div id="komen" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($todayVisitors as $key => $visitor)
                @if($visitor->komentar)
                <div class="carousel-item @if ($key == 0) active @endif">
                    <div class="mx-auto" style="width: 75%; box-sizing: border-box;">
                        <div class="comment-card">
                            <p class="card-text">{{ $visitor->komentar }}</p>
                            <p class="text-right" style="font-weight: bold;">- {{ $visitor->nama }}</p>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#komen" data-bs-slide="prev">
                <span aria-hidden="true">
                    <i style="color: #3B1F4B;" class="bx bx-chevron-left bx-lg"></i>
                </span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#komen" data-bs-slide="next">
                <span aria-hidden="true">
                    <i style="color: #3B1F4B;" class="bx bx-chevron-right bx-lg"></i>
                </span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    </section>

    <!--  Footer -->
    <section id="footer">
        <div class="d-flex justify-content-center align-items-center p-5" style="background-color: rgb(59, 32, 75)">
            <img src="{{ asset('admin/img/logo-header.png') }}" alt="PT.artristik Studio Bandung" width="300">
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

</body>

</html>