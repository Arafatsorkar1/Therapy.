<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.admin.includes.header_links')
</head>

<body>
@include('sweetalert::alert')
<!--*******************
    Preloader start
********************-->
{{--@include('backend.admin.component.preloader')--}}
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">
    <!--**********************************
        Nav header start
    ***********************************-->
    @include('backend.admin.component.header_logo')
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
        @include('backend.admin.includes.header')
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
        @include('backend.admin.includes.sidebar')
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    @yield('content')
    <!--**********************************
        Content body end
    ***********************************-->


    <!--**********************************
        Footer start
    ***********************************-->
    @include('backend.admin.includes.footer')
    <!--**********************************
        Footer end
    ***********************************-->
</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
@include('backend.admin.includes.footer_links')
</body>

</html>
