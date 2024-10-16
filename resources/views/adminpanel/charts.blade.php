@extends('layouts/app')

@section('title')
Diagram
@endsection

@section('content')

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid bg-white">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Grafik Kunjungan</h1>

                <!-- Content Row -->
                <div>

                    <div>


                        <!-- Bar Chart -->
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
                            </div>
                            <div class="card-body">
                                <div class="chart-bar">
                                    <canvas id="myBarChart"></canvas>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<script src="{{ asset('admin/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('admin/js/demo/chart-pie-demo.js') }}"></script>
<script src="{{ asset('admin/js/demo/chart-bar-demo.js') }}"></script>

@endsection