<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Church Admin</title>
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <link href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{asset('/css/sb-admin-2.css')}}" rel="stylesheet">
    @yield('custom_css')
</head>
<body id="page-top" style="background-color: #888889">
<div id="wrapper">
@include('shared.sidemenu')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
        @include('shared.top_nav_bar')
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    @include('shared.footer')
    </div>
</div>
@include('shared.logout_confirm_modal')
@include('shared.change_lang_modal')
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('plugins/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/sb-admin-2.min.js')}}"></script>
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Page level custom scripts -->

@yield('custom_js')
</body>

</html>
