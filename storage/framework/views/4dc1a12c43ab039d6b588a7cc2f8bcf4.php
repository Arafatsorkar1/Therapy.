
<div class="container-fluid bg-white position-relative">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
        <a href="<?php echo e(route('home')); ?>" class="navbar-brand text-secondary">
            <div class="logo"> <a href="<?php echo e(route('home')); ?>">
                    <img src=" <?php echo e(get_setting('website_logo') ? asset(get_setting('website_logo')) : asset('assets/frontend/img/logo.png')); ?>" alt="<?php echo e(get_setting('website_name')); ?>">
                </a>
            </div>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ml-auto py-0 pr-3 border-right">

                <div class="nav-item dropdown">
                    <a href="<?php echo e(route('home')); ?>" class="nav-link dropdown-toggle" data-toggle="dropdown">হোম</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="<?php echo e(route('about-us')); ?>" class="dropdown-item">আমাদের সম্পর্কে</a>
                        <a href="<?php echo e(route('donner')); ?>" class="dropdown-item">ডোনার</a>
                        <a href="<?php echo e(route('donner-list')); ?>" class="dropdown-item">ডোনার তালিকা</a>
                        <?php if(auth()->guard()->check()): ?>
                            <a href="<?php echo e(route('free-service')); ?>" class="dropdown-item">ফ্রি সেবার জন্য সদস্য</a>
                        <?php else: ?>
                            <a href="<?php echo e(route('login')); ?>" class="dropdown-item">ফ্রি সেবার জন্য সদস্য</a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="<?php echo e(route('home')); ?>" class="nav-link dropdown-toggle" data-toggle="dropdown">প্রশিক্ষণ</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <?php $__currentLoopData = \App\Models\TraningCategory::where('status',1)->latest()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('category-traning',optional($category)->slug)); ?>" class="dropdown-item"><?php echo e(optional($category)->name); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="<?php echo e(route('home')); ?>" class="nav-link dropdown-toggle" data-toggle="dropdown">এসেসমেন্ট/টেষ্ট </a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <?php $__currentLoopData = \App\Models\Category::where('status',1)->latest()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('assessment-category',optional($category)->slug)); ?>" class="dropdown-item"><?php echo e(optional($category)->name); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="<?php echo e(route('audiological-test')); ?>" class="nav-link">অডিওলজিক্যাল পরীক্ষা</a>
                </div>
                <a href="" class="nav-item nav-link"></a>
                <div class="nav-item dropdown">
                    <a href="<?php echo e(route('all-language-therapy')); ?>" class="nav-link dropdown-toggle" data-toggle="dropdown">স্পিচ এন্ড ল্যাগুয়েজ  থেরাপি</a>
                    <?php
                        $therapy_category = \App\Models\LanguageCategory::where('status',1)->orderBy('serial','DESC')->get();
                    ?>
                    <div class="dropdown-menu rounded-0 m-0">
                        <?php $__currentLoopData = $therapy_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('therapy',$category->slug)); ?>" class="dropdown-item"><?php echo e($category->name ?? ''); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">সার্ভিস</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <?php $__currentLoopData = \App\Models\Service::where('status',1)->latest()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('single-service',$service->slug ??'')); ?>" class="dropdown-item"><?php echo e($service->title); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <a href="<?php echo e(route('contract')); ?>" class="nav-item nav-link">যোগাযোগ</a>
                <?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(route('user.dashboard')); ?>" class="nav-item nav-link">অ্যাকাউন্ট</a>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="nav-item nav-link">লগইন</a>
                    <a href="<?php echo e(route('register')); ?>" class="nav-item nav-link">রেজিস্টার</a>
                <?php endif; ?>

            </div>
            <div class="d-none d-lg-flex align-items-center pl-4">
                <i class="fa fa-2x fa-mobile-alt text-primary mr-3"></i>
                <div>
                    <h6 class="text-body text-uppercase mb-1"><small>Call Anytime</small></h6>
                    <h6 class="m-0"><a href="tel:<?php echo e(get_setting('contact_number')); ?>"><?php echo e(get_setting('contact_number')); ?></a></h6>
                </div>
            </div>
        </div>
    </nav>
</div>
<?php /**PATH D:\php\Banglasoft\basic\htdocs\Therapylabonline\resources\views/frontend/includes/navbar.blade.php ENDPATH**/ ?>