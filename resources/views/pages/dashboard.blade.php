<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('./sass/dashboard.scss') }}">
    <style>
        #header {}
    </style>
</head>


<body>
    <!-- Header -->
    <section id="header">

        <!-- Navbar  -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Buku Tamu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span>Menu</span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Login Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kunjungan Hari Ini</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End of Navbar -->

        <!-- Hero -->
        <div class="mx-auto">

            <!-- Carousell -->
            <div id="carouselExampleIndicators" class="carousel slide w-75 mx-auto ">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner shadow-lg p-0 m-4 rounded" style="background-color: #3b1f4b;">
                    <div class="carousel-item active">
                        <img src="{{ asset('admin/img/logotest.png') }}" class="d-block mx-auto w-75 p-5" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('admin/img/logotest.png') }}" class="d-block mx-auto w-75 p-5" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('admin/img/logotest.png') }}" class="d-block mx-auto w-75 p-5" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- End of Carousell -->

        </div>

        <!-- Register -->
        <div class="d-flex align-middle m-5">
            <a class="btn text-light text-uppercase mx-auto" href="{{ route('register') }}" role="button"
                style="background-color: #3b1f4b;">berkunjung</a>
        </div>

    </section>
    <!-- End of Header -->

    <section id="content">

        <div id="hari-ini" class="p-5" style="background-color: #3b1f4b; color: white;">
            <div class="d-flex justify-content-between">
                <h2 class=>Kunjungan Hari Ini</h2>
                <h2 class=>22 September 2077</h2>
            </div>
            <table class="mx-auto bg-white rounded-3 m-4" style="color: #3b1f4b;">
                <thead>
                    <tr>
                        <th class="col-1 p-5">No</th>
                        <th class="col-4">Nama</th>
                        <th class="col-7">Tujuan Kunjungan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="p-5"></th>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="hari-ini" class="p-5">
            <h2>Pengunjung Sebelumnya</h2>
            <table>
                <tr>
                    <th class="p-5">No</th>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Tujuan Kunjungan</th>
                </tr>
            </table>
        </div>

    </section>

    <!--  Footer Section -->
    <div class="d-flex justify-content-center align-items-center p-5" style="background-color: rgb(59, 32, 75)">
        <img src="{{ asset('admin/img/logo-header.png') }}" alt="PT.artristik Studio Bandung" width="300">
    </div>
    <!--  End of Footer Section -->

    <!-- Comment Section -->
    <div>

    </div>
    <!-- End of Comment Section -->

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

</body>

</html>