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
        #header {
           
        }
    </style>
</head>


<body>
    <!-- Header -->
    <section id="header">

        <!-- Navbar  -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
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
            <div id="carouselExampleIndicators" class="carousel slide w-75 mx-auto">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner shadow-lg p-0 m-4 bg-body rounded">
                    <div class="carousel-item active">
                        <img src="{{ asset('admin/img/logo.png') }}" class="d-block mx-auto" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('admin/img/logo.png') }}" class="d-block mx-auto" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('admin/img/logo.png') }}" class="d-block mx-auto" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-black" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-black" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- End of Carousell -->

        </div>

          <!-- Register -->
          <div class="d-flex align-middle m-5">
            <a class="btn text-light text-uppercase mx-auto" href="{{ route('register') }}" role="button" style="background-color: #3b1f4b;">berkunjung</a>
          </div>

    </section>
    <!-- End of Header -->

    <!-- Today's History Section -->
    <div>

    </div>
    <!-- End of Today's History Section -->

    <!-- Last History Section -->
    <div>

    </div>
    <!-- End of Last History Section -->

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