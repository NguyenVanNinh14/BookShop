<!DOCTYPE html>
<html>


<!-- Mirrored from themenate.com/applicator/dist/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 12:06:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Koparion Admin</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="/backend/images/logo/apple-touch-icon.html">
    <link rel="shortcut icon" href="/backend/images/logo/favicon.png">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="/backend/vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="/backend/vendor/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="/backend/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- page css -->

    <!-- core css -->
    <link href="/backend/css/font-awesome.min.css" rel="stylesheet">
    <link href="/backend/css/themify-icons.css" rel="stylesheet">
    <link href="/backend/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="/backend/css/animate.min.css" rel="stylesheet">
    <link href="/backend/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="app">
        <div class="layout bg-gradient-info">
            <div class="container">
                <div class="row full-height align-items-center">
                    <div class="col-md-5 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="p-15">
                                    <div class="m-b-30">
                                        <img class="img-responsive inline-block" src="/backend/images/logo/3.png" alt="">
                                        <h2 class="inline-block pull-right m-v-0 p-t-15">Đăng Nhập</h2>
                                    </div>

                                    <p class="m-t-15 font-size-13"></p>
                                    <form action="{{route('check-login')}}" method ="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Tài khoản ">
                                            @error('email')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                                            @error('password')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="checkbox font-size-13 d-inline-block p-v-0 m-v-0">
                                            <input id="remember" name="remember" type="checkbox">
                                            <!-- <label for="agreement">Nhớ Đăng Nhập</label> -->
                                        </div>
                                        <div class="pull-right">
                                            <!-- <a href="#">Quên Mật Khẩu?</a> -->
                                        </div>
                                        <div class="m-t-20 text-right">
                                            <button class="btn btn-gradient-success">Đăng Nhập</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/backend/js/vendor.js"></script>

    <script src="/backend/js/app.min.js"></script>

    <!-- page js -->

</body>


<!-- Mirrored from themenate.com/applicator/dist/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 12:06:16 GMT -->
</html>
