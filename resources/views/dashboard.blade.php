<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ROUTE WISE</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('template/vendor/fontawesome/css/all.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('template/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-solid fa-map-location-dot"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ROUTE <br>
                    WISE
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fas fa-fw fa-house-chimney"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                MASTER DATA
            </div>

            @if (auth()->user()->jabatan == "admin")
            <!-- Nav Item - Data Kriteria -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('Data_Kriteria')}}">
                    <i class="fas fa-fw fa-cube"></i>
                    <span>Data Kriteria</span>
                </a>
            </li>
            @endif

            @if (auth()->user()->jabatan == "admin")
            <!-- Nav Item - Data Sub Kriteria -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('data_alternatif')}}">
                    <i class="fas fa-fw fa-store"></i>
                    <span>Data Alternatif</span>
                </a>
            </li>
            @endif

            @if (auth()->user()->jabatan == "kepala gudang")
            <!-- Nav Item - Data Alternatif -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('data_pengguna')}}">
                    <i class="fas fa-fw fa-shop"></i>
                    <span>Data Toko</span>
                </a>
            </li>
            @endif

            @if (auth()->user()->jabatan == "kepala gudang")
            <!-- Nav Item - Data Sub Kriteria -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('data_alternatif')}}">
                    <i class="fas fa-fw fa-warehouse"></i>
                    <span>Data Produksi</span>
                </a>
            </li>
            @endif

            @if (auth()->user()->jabatan == "pemilik toko")
            <!-- Nav Item - Data Sub Kriteria -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('data_alternatif')}}">
                    <i class="fas fa-fw fa-cart-shopping"></i>
                    <span>Data Pesanan</span>
                </a>
            </li>
            @endif

            @if (auth()->user()->jabatan == "pemilik toko")
            <!-- Nav Item - Data Sub Kriteria -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('data_alternatif')}}">
                    <i class="fas fa-fw fa-history"></i>
                    <span>Histori Pesanan</span>
                </a>
            </li>
            @endif

            @if (auth()->user()->jabatan == "driver")
            <!-- Nav Item - Data Sub Kriteria -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('data_alternatif')}}">
                    <i class="fas fa-fw fa-route"></i>
                    <span>Rekomendasi Rute</span>
                </a>
            </li>
            @endif

            @if (auth()->user()->jabatan == "admin")
            <!-- Nav Item - Data Alternatif -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('data_pengguna')}}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Data Pengguna</span>
                </a>
            </li>
            @endif

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><strong>{{ Auth::user()->nama_lengkap }}</strong></span>
                                <img class="img-profile rounded-circle" src="{{asset('template/img/undraw_profile.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{route('logout')}}">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center mb-4">
                        <i class="fa-solid fa-house-chimney" style="font-size: 25px; margin-right: 10px;"></i>
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row d-sm-flex align-items-center justify-content-evenly">

                        @if (auth()->user()->jabatan == "admin")
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="{{route('Data_Kriteria')}}" style="text-decoration: none">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Data Kriteria</div>
                                            </a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-cube fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        @if (auth()->user()->jabatan == "admin")
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="{{route('data_alternatif')}}" style="text-decoration: none">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Data Alternatif</div>
                                            </a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-shop fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        @if (auth()->user()->jabatan == "kepala gudang")
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="{{route('data_pengguna')}}" style="text-decoration: none">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Data Toko</div>
                                            </a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        @if (auth()->user()->jabatan == "kepala gudang")
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="{{route('data_pengguna')}}" style="text-decoration: none">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Data Produksi</div>
                                            </a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        @if (auth()->user()->jabatan == "pemilik toko")
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="{{route('data_pengguna')}}" style="text-decoration: none">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Data Pesanan</div>
                                            </a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        @if (auth()->user()->jabatan == "pemilik toko")
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="{{route('data_pengguna')}}" style="text-decoration: none">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Histori Pesanan</div>
                                            </a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        @if (auth()->user()->jabatan == "driver")
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="{{route('data_pengguna')}}" style="text-decoration: none">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Rekomendasi Rute</div>
                                            </a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        @if (auth()->user()->jabatan == "admin")
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="{{route('data_pengguna')}}" style="text-decoration: none">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Data Pengguna</div>
                                            </a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Kelompok 5 | ROUTE WISE</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('template/js/sb-admin-2.min.js')}}"></script>

</body>

</html>