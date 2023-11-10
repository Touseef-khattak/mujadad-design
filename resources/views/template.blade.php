<!DOCTYPE html>
<html lang="en" >
<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>Mujadad</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('assets/images/7717502.jpg')}}">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--end::Base Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/common.css')}}">
</head>
<!-- end::Head -->
<!-- end::Body -->
<body  class="">
@include('includes.header')
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
@yield('content')
    <!-- end:: Body -->
    <!-- begin::Footer -->
@include('includes.footer')
    <!-- end::Footer -->
</div>
<!-- end:: Page -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
@yield('footer_scripts')
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<!-- end::Body -->
</html>
