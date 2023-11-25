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

<body class="bg-gradient-primary">

    <div class="container">
        <div class="justify-content-center d-flex align-items-center vh-100">
            <div class="col-xl-6 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div>
                            <div class="lg-7">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                    </div>
                                    <form class="user" action="{{route('simpanregistrasi')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="nama_lengkap" id="exampleFirstName" placeholder="Nama Lengkap">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="no_telp" id="exampleInputPassword" placeholder="No Telepon">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="jabatan" style="border-radius: 50px; height: 50px; font-size: 15px;">
                                                <option value="">Jabatan</option>
                                                <option value="admin" <?php if (isset($dtUser) && $dtUser->jabatan == 'admin') echo "selected"; ?>>
                                                    admin</option>
                                                <option value="kepala gudang" <?php if (isset($dtUser) && $dtUser->jabatan == 'kepala gudang') echo "selected"; ?>>
                                                    kepala gudang</option>
                                                <option value="driver" <?php if (isset($dtUser) && $dtUser->jabatan == 'driver') echo "selected"; ?>>
                                                    driver</option>
                                                <option value="pemilik toko" <?php if (isset($dtUser) && $dtUser->jabatan == 'pemilik toko') echo "selected"; ?>>
                                                    pemilik toko</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Register Account</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{route('login')}}">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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