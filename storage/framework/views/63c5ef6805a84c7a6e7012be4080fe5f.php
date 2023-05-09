<?php $__env->startSection('title','Language Therapy'); ?>
<?php $__env->startSection('css'); ?>
    <style>
        .h-match {
            display: flex;
            flex-direction: column;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .row::after {
            content: "";
            flex: auto;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">Language Therapy - <?php echo e($category->name ?? ''); ?></h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="<?php echo e(route('home')); ?>">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">Language Therapy - <?php echo e($category->name ?? ''); ?></h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <section>
        <div class="container">
            <div class="row mb-2">
                <div class="col-md-8">
                    <?php $__currentLoopData = $therapies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $therapy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class=" col-md-6 h-match mb-3">
                            <div class="card h-100">
                                <a href="<?php echo e(route('single-therapy',$therapy->slug ?? '')); ?>" class="card-img-top">
                                    <img class="img-fluid" style="height: 250px;width: 100%;object-fit: cover;" src="<?php echo e($therapy->image ? asset($therapy->image) : asset('images/default.jpg')); ?>" alt="">
                                </a>
                                <div class="card-body">
                                    <h3><a href="<?php echo e(route('single-therapy',$therapy->slug ?? '')); ?>" class="text-dark"><?php echo e(Str::limit($therapy->title,45) ?? ''); ?></a></h3>
                                    <a href=""><p class="font-weight-bold"> Price : <?php echo e($therapy->price ?? 0); ?></p></a>
                                    <p><?php echo Str::words($therapy->description,20) ?? ''; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="col-md-4">

                </div>

            </div>
            <div class="row">
                <div class="col">
                    <?php echo $therapies->links(); ?>

                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\Banglasoft\basic\htdocs\Therapylabonline\resources\views/frontend/pages/language_therapy/therapy.blade.php ENDPATH**/ ?>