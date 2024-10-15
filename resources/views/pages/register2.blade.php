<!DOCTYPE html>
<html lang="en" class="overflow-hidden">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

     <!-- Custom fonts for this template-->
     <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">
     <!-- Custom styles for this template-->
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Registrasi</title>

</head>
<body>

    <!-- Section: Design Block -->
<section class="">
    <!-- Jumbotron -->
    <x-navback></x-navback>
    <div class="px-5 py-4 px-md-5 text-lg-start" style="background-color: rgb(59, 32, 75); height: 100vh;">
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card">
              <div class="card-body py-4 px-md-5 mb-5">
                <h1 class="text-lg text-uppercase font-weight-bold text-dark mb-4">Masukan info <br /> Kunjungan</h1>
                <form>
                  <!-- name -->
                  <div data-mdb-input-init class="form-outline mb-2">
                    <label class="form-label" for="form3Example3">Tujuan Kunjungan</label>
                    <input type="text" id="form3Example3" class="form-control" style="border: 1px solid #FF5A5A" />
                  </div>
  
                  <!-- asal -->
                  <div data-mdb-input-init class="form-outline mb-2">
                    <label for="exampleFormControlTextarea1" class="form-label">Tujuan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="border: 1px solid #FF5A5A"></textarea>
                  </div>
  
                  <!-- email -->
                  <div data-mdb-input-init class="form-outline-danger mb-2">
                    <label for="exampleFormControlTextarea1" class="form-label">Komentar</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="border: 1px solid #FF5A5A"></textarea>
                  </div>
  
                  <!-- Submit button -->
                  <div class="d-flex d-md-flex justify-content-md-end">
                    <button class="btn me-md-2 text-light font-weight-bold" type="button" style="background-color: rgb(59, 32, 75)">submit</button>
                  </div>

                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0 text-center">
              <img src="{{ asset('admin/img/logotest.png') }}" alt="PT.artristik Studio Bandung" width="400">
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
{{-- coment --}}s