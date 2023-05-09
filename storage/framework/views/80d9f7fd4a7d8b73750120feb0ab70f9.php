<?php $__env->startSection('title','Contract'); ?>
<?php $__env->startSection('content'); ?>
    <!-- Page Header Start -->
    <div class="py-4 container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">Login</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="<?php echo e(route('home')); ?>">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">Login</h6>
        </div>
    </div>
    <!-- Page Header Start -->
    <section class="mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto shadow border">
                    <form action="<?php echo e(route('login')); ?>" method="post" class="card border-0 rounded-0">
                        <?php echo csrf_field(); ?>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label for="" class="col-md-2">Phone Number</label>
                                <div class="col-md-10">
                                    <input type="number" value="<?php echo e(old('phone')); ?>" name="phone" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small class="text-danger"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-2">Password</label>
                                <div class="col-md-10">
                                    <input type="password" name="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small class="text-danger"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-2"></label>
                                <div class="col-md-10">
                                    <input type="submit" value="Login" class="btn btn-dark">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-2"></label>
                                <div class="col-md-10">
                                    <a href="<?php echo e(route('register')); ?>">If you don't have any account the register now</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\Banglasoft\basic\htdocs\Therapylabonline\resources\views/frontend/pages/auth/login.blade.php ENDPATH**/ ?>