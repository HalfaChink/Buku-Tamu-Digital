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
    </style>
</head>


<body>
    <!-- Header -->
    <section id="header">

        <!-- Navbar  -->
        <nav class="navbar navbar-expand-lg" style="background-color: white;">
            <div class="container-fluid">
                <a class="navbar-brand text-dark" href="#">Buku Tamu</a>
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
                                <li><a class="dropdown-item" href="{{ route('loginAdmin') }}">Login Admin</a></li>
                                <li><a class="dropdown-item" href="#">Kunjungan Hari Ini</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End of Navbar -->

        <!-- Hero -->
        <div class="mx-auto">

            <!-- Carousell -->
            <div id="carouselExampleIndicators" class="carousel slide mx-auto"
                style="width: 80%; height: 15%; box-sizing: border-box;">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators " data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner shadow-lg p-0 m-4 rounded-3 border">
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
                    <span aria-hidden="true">
                        <i style="color: #3B1F4B;" class="bx bx-chevron-left bx-lg"></i>
                    </span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span aria-hidden="true">
                        <i style="color: #3B1F4B;" class="bx bx-chevron-right bx-lg"></i>
                    </span>
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

        <div id="hari-ini" class="p-5" style="background-color: #3b1f4b; color: #FFB91E;">
            <div class="d-flex justify-content-between">
                <h2 class=>Kunjungan Hari Ini</h2>
                <h2 class=>22 September 2077</h2>
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
                    <?php
/*
$conn = pg_connect("host=localhost dbname=NGARAN_DATABASE user=postgres password=PASSWORDNA");

if (!$conn) {
  die("Koneksi gagal: " . pg_last_error());
}
$sql = "SELECT id, nama, tujuan_kunjungan FROM tabel_kunjungan";
$result = pg_query($conn, $sql);

if (!$result) {
  die("Query gagal: " . pg_last_error());
}

if (pg_num_rows($result) > 0) {
  $no = 1; 
  while ($row = pg_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $no++ . "</td>"; 
      echo "<td>" . $row["nama"] . "</td>"; 
      echo "<td>" . $row["tujuan_kunjungan"] . "</td>"; 
      echo "</tr>";
  }
} else {
  echo "<tr><td colspan='3'>Data tidak tersedia</td></tr>";
}

pg_close($conn);
*/
      ?>
                </tbody>
            </table>
        </div>

            
            {{-- <table>
                <tr>
                    <th class="p-5">No</th>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Tujuan Kunjungan</th>
                </tr>
            </table> --}}

    </section>

    <section id="kunjungan">
        <div class="container mt-5">
            <h2>Siapa Saja Yang Pernah <br/>Berkunkung</h2>
            <div id="kunjungan" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <!-- First slide -->
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-sm-3">
                                <div class="card">
                                    <img src="https://media.istockphoto.com/id/1442252234/id/foto/kolega-yang-ramah-duduk-di-kursi-berlengan-menikmati-pembicaraan-di-ruang-kantor.jpg?s=1024x1024&w=is&k=20&c=6y-DRKheiW5KFEmio-azMl6uLvsAAw8Gupcr1JP3Fdo=" class="card-img-top" alt="Card 1">
                                    <div class="card-body d-flex">
                                        <button type="button" class="btn btn-primary px-5 m-2">pt.yadika</button>
                                        <button type="button" class="btn btn-primary"></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <img src="https://media.istockphoto.com/id/1442252234/id/foto/kolega-yang-ramah-duduk-di-kursi-berlengan-menikmati-pembicaraan-di-ruang-kantor.jpg?s=1024x1024&w=is&k=20&c=6y-DRKheiW5KFEmio-azMl6uLvsAAw8Gupcr1JP3Fdo=" class="card-img-top" alt="Card 2">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary px-5 m-2">pt.yadika</button>
                                        <button type="button" class="btn btn-primary"></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <img src="https://media.istockphoto.com/id/1442252234/id/foto/kolega-yang-ramah-duduk-di-kursi-berlengan-menikmati-pembicaraan-di-ruang-kantor.jpg?s=1024x1024&w=is&k=20&c=6y-DRKheiW5KFEmio-azMl6uLvsAAw8Gupcr1JP3Fdo=" class="card-img-top" alt="Card 3">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary px-5 m-2">pt.yadika</button>
                                        <button type="button" class="btn btn-primary"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="card">
                                    <img src="https://media.istockphoto.com/id/1442252234/id/foto/kolega-yang-ramah-duduk-di-kursi-berlengan-menikmati-pembicaraan-di-ruang-kantor.jpg?s=1024x1024&w=is&k=20&c=6y-DRKheiW5KFEmio-azMl6uLvsAAw8Gupcr1JP3Fdo=" class="card-img-top" alt="Card 4">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary px-5 m-2">pt.yadika</button>
                                        <button type="button" class="btn btn-primary"></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <img src="https://media.istockphoto.com/id/1442252234/id/foto/kolega-yang-ramah-duduk-di-kursi-berlengan-menikmati-pembicaraan-di-ruang-kantor.jpg?s=1024x1024&w=is&k=20&c=6y-DRKheiW5KFEmio-azMl6uLvsAAw8Gupcr1JP3Fdo=" class="card-img-top" alt="Card 5">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary px-5 m-2">pt.yadika</button>
                                        <button type="button" class="btn btn-primary"></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <img src="https://media.istockphoto.com/id/1442252234/id/foto/kolega-yang-ramah-duduk-di-kursi-berlengan-menikmati-pembicaraan-di-ruang-kantor.jpg?s=1024x1024&w=is&k=20&c=6y-DRKheiW5KFEmio-azMl6uLvsAAw8Gupcr1JP3Fdo=" class="card-img-top" alt="Card 6">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary px-5 m-2">pt.yadika</button>
                                        <button type="button" class="btn btn-primary"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#kunjungan" data-bs-slide="prev">
                    <span aria-hidden="true">
                      <i style="color: #3B1F4B;" class="bx bx-chevron-left bx-lg"></i>
                    </span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#kunjungan" data-bs-slide="next">
                    <span aria-hidden="true">
                      <i style="color: #3B1F4B;" class="bx bx-chevron-right bx-lg"></i>
                    </span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>


    <section id="komentar" style="color:#3B1F4B">
        <div class="container my-5">
            <h2 class="text-center mb-4">Komentar Pengunjung</h2>
            <div id="komen" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="mx-auto" style="width: 75%; box-sizing: border-box;">
                            <div class="comment-card">
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere, ea. Non ducimus accusamus earum harum!</p>
                                <p class="text-right" style="font-weight: bold;">- costa</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="mx-auto"  style="width: 75%; box-sizing: border-box;">
                            <div class="comment-card">
                                <p class="card-text">Mauris ornare lectus sed enim pulvinar, sit amet luctus ante
                                    pharetra. Donec pulvinar magna sed justo ullamcorper tempor.</p>
                                <p class="text-right" style="font-weight: bold;">- Jane Doe</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="mx-auto" style="width: 75%; box-sizing: border-box;">
                            <div class="comment-card">
                                <p class="card-text">Pellentesque luctus nibh mauris, id varius magna pellentesque a.
                                    Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                <p class="text-right" style="font-weight: bold;">- John Smith</p>
                            </div>
                        </div>
                    </div>
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

    <!--  Footer Section -->
    <div class="d-flex justify-content-center align-items-center p-5" style="background-color: rgb(59, 32, 75)">
        <img src="{{ asset('admin/img/logo-header.png') }}" alt="PT.artristik Studio Bandung" width="300">
    </div>
    <!--  End of Footer Section -->

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>


</body>

</html>

