<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a href="<?php echo e(route('admin.dashboard')); ?>" aria-expanded="false">
                    <i class="icon-badge menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('admin.user.index')); ?>" aria-expanded="false">
                    <i class="icon-badge menu-icon"></i><span class="nav-text">Users</span>
                </a>
            </li>

















            <li>
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Traning</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="<?php echo e(route('admin.traning-category.index')); ?>">Category</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.traning.index')); ?>">Tranings</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.traning-order.index')); ?>">Traning Order</a>
                    </li>
                    <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Assessment</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="<?php echo e(route('admin.category.index')); ?>">Category</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.sub-category.index')); ?>">Sub Category</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.answer.index')); ?>">Answer</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.question.index')); ?>">Questions</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.assessment-order.index')); ?>">Assessment Orders</a>
                    </li>
                    <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                </ul>
            </li>

            <li>
                <a class="" href="<?php echo e(route('admin.test.index')); ?>">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Audiological Test</span>
                </a>
            </li>

            <li>
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Language Therapy</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="<?php echo e(route('admin.language-therapy-category.index')); ?>">Category</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.language-therapy.index')); ?>">Therapy</a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="" href="<?php echo e(route('admin.service.index')); ?>">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Services</span>
                </a>
            </li>

            <li>
                <a class="" href="<?php echo e(route('admin.all-order.index')); ?>">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">All Orders</span>
                </a>
            </li>

            <li>
                <a class="" href="<?php echo e(route('admin.donner.index')); ?>">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Donner</span>
                </a>
            </li>
            <li>
                <a class="" href="<?php echo e(route('admin.subscriber.index')); ?>">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Subscribers</span>
                </a>
            </li>

            <li class="nav-label">Settings</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="<?php echo e(route('admin.homepage.setting')); ?>">Home page</a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Others</a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo e(route('admin.setting.website')); ?>">Website</a></li>
                            <li><a href="<?php echo e(route('admin.setting.institute')); ?>">Institute</a></li>
                            <li><a href="<?php echo e(route('admin.setting.all-others')); ?>">Others</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.footer.setting')); ?>">Footer</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<?php /**PATH D:\php\Banglasoft\basic\htdocs\Therapylabonline\resources\views/backend/admin/includes/sidebar.blade.php ENDPATH**/ ?>