<!DOCTYPE html>
<html>


<!-- Mirrored from themenate.com/applicator/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 11:17:23 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Applicator - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="/backend/images/logo/apple-touch-icon.html">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

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
    <div class="app header-default side-nav-dark">
        <div class="layout">
            <!-- Header START -->
            @include('admins.header')
            <!-- Header END -->

            <!-- Side Nav START -->
            @include('admins.sidebar')
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                <!-- Quick View START -->
                <!-- Side Panel END -->

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                    </div>

                    @yield('content')

            </div>

            <!-- Content Wrapper END -->

                <!-- Footer START -->
                @include('admins.footer')
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

        </div>
    </div>

    <script src="/backend/js/vendor.js"></script>

    <script src="/backend/js/app.min.js"></script>

    <!-- page js -->
    <script src="/backend/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="/backend/vendor/jquery.sparkline/jquery.sparkline.min.js"></script>
    <script src="/backend/js/dashboard/default.js"></script>

</body>


<!-- Mirrored from themenate.com/applicator/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 11:18:15 GMT -->
</html>
