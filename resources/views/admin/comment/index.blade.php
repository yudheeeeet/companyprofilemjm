@extends('template.master')
@section('content')

<body id="body">
    {{-- todo Header --}}
    <div class="header">
        <div class="wrapper">
            <div class="bg-awal">
                <div id="carouselExampleRide" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="/img/home.jpg" class="d-block w-100 img-fluid" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h6>Pembangunan Rumah</h6>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="/img/renovation.jpg" class="d-block w-100 img-fluid" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h6>Renovasi Rumah & Bangunan</h6>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="/img/waterproofing2.jpg" class="d-block w-100 img-fluid" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h6>Waterproofing & Concrete Repair</h6>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="title">
                <div class="container-fluid">
                    <div class="row">
                        <h1 class="animate__animated animate__zoomIn animate__delay-2s">
                            MENYONGSONG <br />
                            MASA DEPAN <br />
                            DENGAN KEAHLIAN <br />
                            KONSTRUKSI TERBAIK
                        </h1>
                    </div>
                    <div class="row">
                        <p class="animate__animated animate__fadeInUp animate__delay-2s">
                            Bersama <span class="highlight">PT. Megah Jaya Mandiri</span> wujudkan proyek konstruksi
                            impian Anda. <br />
                            Dengan dedikasi tinggi, kami menghadirkan solusi berkualitas <br />
                            untuk setiap tuntutan konstruksi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Datatables css -->
    <link href="assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />

    <!-- Datatables js -->
    <script src="assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Data Karyawan</h2>
        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
</body>
@endsection
