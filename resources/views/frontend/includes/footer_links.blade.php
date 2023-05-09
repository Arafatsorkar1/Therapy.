
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}assets/frontend/lib/easing/easing.min.js"></script>
<script src="{{asset('/')}}assets/frontend/lib/waypoints/waypoints.min.js"></script>
<script src="{{asset('/')}}assets/frontend/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="{{asset('/')}}assets/frontend/lib/isotope/isotope.pkgd.min.js"></script>
<script src="{{asset('/')}}assets/frontend/lib/lightbox/js/lightbox.min.js"></script>

<!-- Contact Javascript File -->
<script src="{{asset('/')}}assets/frontend/mail/jqBootstrapValidation.min.js"></script>
<script src="{{asset('/')}}assets/frontend/mail/contact.js"></script>

<!-- Template Javascript -->
<script src="{{asset('/')}}assets/frontend/js/main.js"></script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@yield('script')
