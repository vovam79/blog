<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <div class="col-12 d-flex justify-content-between">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="{{asset('#')}}" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <ul class="navbar-nav">

            <li class="nav-item">
                {{--<a class="nav-link" data-widget="navbar-search" href="{{asset('#')}}" role="button">
                    <i class="fas fa-search"></i>
                </a>--}}

                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                    @csrf
                    <input class="btn btn-outline-primary" type="submit" value="LogOut">
                </form>

            </li>

           {{-- <li class="nav-item d-none d-sm-inline-block">
                <a href="{{asset('index3.html')}}" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{asset('#')}}" class="nav-link">Contact</a>
            </li>--}}
        </ul>
        </div>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->


            <!-- Messages Dropdown Menu -->

            <!-- Notifications Dropdown Menu -->

        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('person.includes.sidebar')

<!-- Content Wrapper. Contains page content -->
   {{-- <div class="content-wrapper">--}}
        @yield('content')
   {{-- </div>--}}
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Blog</strong>

    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote(
            {
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            }
        );
        $(function () {
            bsCustomFileInput.init();
            $('.select2').select2();
        });
    });
</script>
<style>
    .custom-file-input:lang(en)~.custom-file-label::after{
        content: "...";
    }
</style>
<!-- AdminLTE for demo purposes -->
{{--<script src="{{asset('dist/js/demo.js')}}"></script>--}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{--<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>--}}
</body>
</html>
