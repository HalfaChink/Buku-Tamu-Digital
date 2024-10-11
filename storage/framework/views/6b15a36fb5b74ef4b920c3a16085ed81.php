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
     <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">

     <!-- Custom styles for this template-->
    <link href="<?php echo e(asset('admin/css/sb-admin-2.min.css')); ?>" rel="stylesheet">

    <!-- Bootstrap -->
    <script src="<?php echo e(asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Registrasi</title>
</head>
<body>

    <!-- Section: Design Block -->
<section class="">
    <!-- Jumbotron -->
    <div class="px-4 py-4 px-md-5 text-lg-start" style="background-color: rgb(59, 32, 75)">
      <?php if (isset($component)) { $__componentOriginal9b4c7c4648a1c8999c37d1590f687399 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b4c7c4648a1c8999c37d1590f687399 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navback','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navback'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9b4c7c4648a1c8999c37d1590f687399)): ?>
<?php $attributes = $__attributesOriginal9b4c7c4648a1c8999c37d1590f687399; ?>
<?php unset($__attributesOriginal9b4c7c4648a1c8999c37d1590f687399); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9b4c7c4648a1c8999c37d1590f687399)): ?>
<?php $component = $__componentOriginal9b4c7c4648a1c8999c37d1590f687399; ?>
<?php unset($__componentOriginal9b4c7c4648a1c8999c37d1590f687399); ?>
<?php endif; ?>
      <div class="container">
        <div class="row gx-lg-5 align-items-end">
        
  
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card">
              <div class="card-body py-4 px-md-5">
                <h1 class="text-lg text-uppercase font-weight-bold text-dark mb-4">masukan info <br /> pribadi</h1>
                <form>
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  
                  <!-- name -->
                  <div data-mdb-input-init class="form-outline mb-2">
                    <label class="form-label" for="form3Example3">tujuan kunjungan</label>
                    <input type="text" id="form3Example3" class="form-control" />
                  </div>
  
                  <!-- asal -->
                  <div data-mdb-input-init class="form-outline mb-2">
                    <label class="form-label" for="form3Example3">Asal</label>
                    <input type="text" id="form3Example3" class="form-control" />
                  </div>
  
                  <!-- email -->
                  <div data-mdb-input-init class="form-outline-danger mb-2">
                    <label class="form-label" for="form3Example4">Email</label>
                    <input type="email" id="form3Example4" class="form-control" />
                  </div>

                  <!-- No tlp -->
                  <div data-mdb-input-init class="form-outline mb-2">
                    <label class="form-label" for="form3Example4">NO.TLP</label>
                    <input type="number" id="form3Example4" class="form-control" />
                  </div>

                  <!-- jumlah pengunjung -->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">Jumlah Pengunjung</label>
                    <input type="number" id="form3Example4" class="form-control"/>
                  </div>
  
                  <!-- Checkbox -->
                  
  
                  <!-- Submit button -->
                  <div class="d-flex d-md-flex justify-content-md-end">
                    <button class="btn me-md-2 text-light font-weight-bold" type="button" style="background-color: rgb(59, 32, 75)">submit</button>
                  </div>
  
                  <!-- Register buttons -->
                  
  
                    

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
</html><?php /**PATH C:\laragon\www\Projects\Buku-Tamu-Digital\resources\views/register2.blade.php ENDPATH**/ ?>