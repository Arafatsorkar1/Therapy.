<!DOCTYPE html>
<html lang="en">

<head>
<?php echo $__env->make('frontend.includes.header_links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Navbar Start -->
    <?php echo $__env->make('frontend.includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Navbar End -->

<?php echo $__env->yieldContent('content'); ?>
<!-- Footer Start -->
<?php echo $__env->make('frontend.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-up"></i></a>

<?php echo $__env->make('frontend.includes.footer_links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH D:\php\Banglasoft\basic\htdocs\Therapylabonline\resources\views/frontend/layout/app.blade.php ENDPATH**/ ?>