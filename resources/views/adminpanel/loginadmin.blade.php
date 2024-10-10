<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

  <title>Login Admin</title>
</head>

<body>

  <!-- Section: Design Block -->
  <section class="h-100">
    <!-- Jumbotron -->
    <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: rgb(59, 32, 75)">
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <img src="" alt="">
          </div>

          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card">
              <div class="card-body py-15 px-md-15">
                <h1 class="d-flex justify-content-start">Login Admin</h1>
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

                  <div data-mdb-input-init class="form-outline mb-2">
                    <label class="form-label d-flex justify-content-start" for="form3Example3">Username</label>
                    <input type="email" id="form3Example3" class="form-control" />
                  </div>

                  <!-- asal -->
                  <div data-mdb-input-init class="form-outline mb-2">
                    <label class="form-label d-flex justify-content-start" for="form3Example3">Password</label>
                    <input type="email" id="form3Example3" class="form-control" />
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
                    <button class="btn btn-danger me-md-2" type="button">Berikutnya</button>
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