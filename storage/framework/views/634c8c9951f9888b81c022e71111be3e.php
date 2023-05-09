<?php $__env->startSection('content'); ?>

    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">About</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">About</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- About Start -->
    <div class="container-fluid pt-5">
        <div class="container pt-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid mb-4 mb-lg-0" src="<?php echo e(asset(get_setting('about_image') ?? 'images/default.jpg')); ?>" alt="">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-4 text-uppercase mb-4"><?php echo e(get_setting('about_title')); ?></h1>
                    <p class="mb-4"><?php echo get_setting('about_description'); ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\Banglasoft\basic\htdocs\Therapylabonline\resources\views/frontend/pages/about/about_us.blade.php ENDPATH**/ ?>