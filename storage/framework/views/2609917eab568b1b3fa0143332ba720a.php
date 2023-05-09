<?php $__env->startSection('title',$services->title); ?>
<?php $__env->startSection('content'); ?>
    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">Service - <?php echo e($services->title); ?></h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="<?php echo e(route('home')); ?>">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">Service</h6>
        </div>
    </div>
    <!-- Page Header Start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card h-100">
                        <img class="img-fluid" style="height: 250px;width: 100%;object-fit: cover;" src="<?php echo e(asset($services->image ?? 'images/default.jpg')); ?>" alt="">
                        <div class="card-body">
                            <h3><a href="Javascript:void(0);" class="text-dark"><?php echo e($services->title ?? ''); ?></a></h3>
                            <small>Created By : <b><?php echo e($services->user->name); ?></b> At : <?php echo e($services->created_at->diffForHumans() ?? ''); ?></small>
                            <a href="Javascript:void(0);"><p class="font-weight-bold"> Price : <?php echo e($services->price ?? 0); ?></p></a>
                            <p><?php echo $services->description ?? ''; ?></p>
                            <?php if(auth()->guard()->check()): ?>
                                <a href="<?php echo e(route('order-service',$services->slug)); ?>" class="btn btn-success">Order The Service...</a>
                            <?php else: ?>
                                <a href="<?php echo e(route('login')); ?>" class="btn btn-success">Login First For Order...</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <?php $__currentLoopData = $latest_service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('single-service',$service->slug)); ?>" class="row">
                            <div class="col-md-12">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div class="" style="height: 100px;overflow: hidden;">
                                                <img src="<?php echo e($service->image ? asset($service->image) : asset('images/default.jpg')); ?>" class="fit-image img-fluid rounded-start" alt="<?php echo e($service->slug ?? ''); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-title font-weight-bold"><?php echo e(Str::limit($service->title,20) ?? ''); ?></p>
                                                <p class="card-text"><small class="text-body-secondary">Created At <?php echo e($service->created_at->diffForHumans() ?? ''); ?></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\Banglasoft\basic\htdocs\Therapylabonline\resources\views/frontend/pages/service/all_service.blade.php ENDPATH**/ ?>