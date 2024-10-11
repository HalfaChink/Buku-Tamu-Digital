<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Bootstrap -->

    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Registrasi</title>
</head>

<body>
  <!-- Section: Design Block -->
  <section class="h-100">
    <!-- Jumbotron -->
    <div class="px-4 py-4 px-md-5 text-lg-start" style="background-color: rgb(59, 32, 75)">
      <x-navback></x-navback>
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0 text-center">
            <img src="{{ asset('admin/img/logo_artristik.png') }}" alt="PT.artristik Studio Bandung" width="500">
          </div>

          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card">
              <div class="card-body py-4 px-md-5">
                <h1 class="text-lg text-uppercase font-weight-bold text-dark mb-4">masukan info <br /> pribadi</h1>

                <form>
                  <!-- name start-->
                  <div data-mdb-input-init class="form-outline mb-2">
                    <label class="form-label" for="form3Example3">nama</label>
                    <input type="text" id="form3Example3" class="form-control" />
                  </div>
                  <!-- name end-->
                  <!-- asal start-->
                  <div data-mdb-input-init class="form-outline mb-2">
                    <label class="form-label" for="form3Example3">Asal</label>
                    <input type="text" id="form3Example3" class="form-control" />
                  </div>
                   <!-- asal end-->
                  <!-- email start-->
                  <div data-mdb-input-init class="form-outline-danger mb-2">
                    <label class="form-label" for="form3Example4">Email</label>
                    <input type="email" id="form3Example4" class="form-control" />
                  </div>
                  <!-- email end-->
                  <!-- No tlp start -->
                  <div data-mdb-input-init class="form-outline mb-2">
                    <label class="form-label" for="form3Example4">NO.TLP</label>
                    <input type="number" id="form3Example4" class="form-control" />
                  </div>
                  <!-- No tlp end -->
                  <!-- jumlah pengunjung start-->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">Jumlah Pengunjung</label>
                    <input type="number" id="form3Example4" class="form-control"/>
                  </div>
                     <!-- jumlah pengunjung end-->
                  <!-- Berikutnya button start-->
                  <div class="d-flex d-md-flex justify-content-md-end">
                    <button class="btn me-md-2 text-light font-weight-bold" type="button" style="background-color: rgb(59, 32, 75)">Berikutnya</button>
                     <!-- Berikutnya button end -->
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->

  {{-- bootstrap --}}
  <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>