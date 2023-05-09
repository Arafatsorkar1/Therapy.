<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend.includes.header_links')
</head>

<body>
@include('sweetalert::alert')
<!-- Navbar Start -->
    @include('frontend.includes.navbar')
<!-- Navbar End -->

@yield('content')
<!-- Footer Start -->
@include('frontend.includes.footer')
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-up"></i></a>

@include('frontend.includes.footer_links')
</body>

</html>
