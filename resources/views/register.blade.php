<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
=======
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
>>>>>>> refs/remotes/origin/local

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

<<<<<<< HEAD
    <!-- Bootstrap -->
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Registrasi</title>
=======
  <title>Register</title>
>>>>>>> refs/remotes/origin/local
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
<<<<<<< HEAD
              <div class="card-body py-4 px-md-5">
                <h1 class="text-lg text-uppercase font-weight-bold text-dark mb-4">masukan info <br /> pribadi</h1>
=======
              <div class="card-body py-15 px-md-15">
                <h1 class="d-flex justify-content-start">Masukan Info Pribadi</h1>
>>>>>>> refs/remotes/origin/local
                <form>
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  {{-- <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form3Example1" class="form-control" />
                        <label class="form-label" for="form3Example1">First name</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form3Example2" class="form-control" />
                        <label class="form-label" for="form3Example2">Last name</label>
                      </div>
                    </div>
                  </div> --}}
                  <!-- name -->
                  <div data-mdb-input-init class="form-outline mb-2">
<<<<<<< HEAD
                    <label class="form-label" for="form3Example3">nama</label>
                    <input type="text" id="form3Example3" class="form-control" />
=======
                    <label class="form-label d-flex justify-content-start" for="form3Example3">Nama</label>
                    <input type="email" id="form3Example3" class="form-control" />
>>>>>>> refs/remotes/origin/local
                  </div>

                  <!-- asal -->
                  <div data-mdb-input-init class="form-outline mb-2">
<<<<<<< HEAD
                    <label class="form-label" for="form3Example3">Asal</label>
                    <input type="text" id="form3Example3" class="form-control" />
=======
                    <label class="form-label d-flex justify-content-start" for="form3Example3">Asal</label>
                    <input type="email" id="form3Example3" class="form-control" />
>>>>>>> refs/remotes/origin/local
                  </div>

                  <!-- email -->
<<<<<<< HEAD
                  <div data-mdb-input-init class="form-outline-danger mb-2">
                    <label class="form-label" for="form3Example4">Email</label>
                    <input type="email" id="form3Example4" class="form-control" />
=======
                  <div data-mdb-input-init class="form-outline mb-2">
                    <label class="form-label d-flex justify-content-start" for="form3Example4">Email</label>
                    <input type="password" id="form3Example4" class="form-control" />
>>>>>>> refs/remotes/origin/local
                  </div>

                  <!-- No tlp -->
                  <div data-mdb-input-init class="form-outline mb-2">
<<<<<<< HEAD
                    <label class="form-label" for="form3Example4">NO.TLP</label>
                    <input type="number" id="form3Example4" class="form-control" />
=======
                    <label class="form-label d-flex justify-content-start" for="form3Example4">No.Tlp</label>
                    <input type="password" id="form3Example4" class="form-control" />
>>>>>>> refs/remotes/origin/local
                  </div>

                  <!-- jumlah pengunjung -->
                  <div data-mdb-input-init class="form-outline mb-4">
<<<<<<< HEAD
                    <label class="form-label" for="form3Example4">Jumlah Pengunjung</label>
                    <input type="number" id="form3Example4" class="form-control"/>
=======
                    <label class="form-label d-flex justify-content-start" for="form3Example4">Jumlah Pengunjung</label>
                    <input type="password" id="form3Example4" class="form-control" />
>>>>>>> refs/remotes/origin/local
                  </div>

                  <!-- Checkbox -->
                  {{-- <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                    <label class="form-check-label" for="form2Example33">
                      Subscribe to our newsletter
                    </label>
                  </div> --}}

                  <!-- Submit button -->
                  <div class="d-flex d-md-flex justify-content-md-end">
                    <button class="btn me-md-2 text-light font-weight-bold" type="button" style="background-color: rgb(59, 32, 75)">Berikutnya</button>
                  </div>

                  <!-- Register buttons -->
                  {{-- <div class="text-center">
                    <p>or sign up with:</p>
                    <button type="button" data-mdb-button-init data-mdb-ripple-init
                      class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-facebook-f"></i>
                    </button> --}}

                    {{-- <button type="button" data-mdb-button-init data-mdb-ripple-init
                      class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-google"></i>
                    </button>

                    <button type="button" data-mdb-button-init data-mdb-ripple-init
                      class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" data-mdb-button-init data-mdb-ripple-init
                      class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-github"></i>
                    </button> --}}
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
</body>

</html>