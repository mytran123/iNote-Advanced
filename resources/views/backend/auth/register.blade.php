<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="text-center">
                                <br>
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <tr>
                                        <th>Name</th>
                                        <td><input style="width: 90%" type="text" name="name"></td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td><input style="width: 90%" type="text" name="phone"></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><input style="width: 90%" type="text" name="email"></td>
                                    </tr>
                                    <tr>
                                        <th>Password</th>
                                        <td><input style="width: 90%" type="text" name="password"></td>
                                    </tr>
                                    <tr>
                                        <th>Birthday</th>
                                        <td><input style="width: 90%" type="date" name="birthday"></td>
                                    </tr>
                                    <tr>
                                        <th>Sex</th>
                                        <td>
                                            <select name="sex" id="sex" style="width: 90%">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Image</th>
                                        <td><input type="file" name="file"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button style="width: 50%; margin: auto" type="submit" class="btn btn-primary btn-user btn-block">
                                                Register
                                            </button>
                                        </td>

                                    </tr>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('js/sb-admin-2.min.js')}}"></script>
</body>
</html>





