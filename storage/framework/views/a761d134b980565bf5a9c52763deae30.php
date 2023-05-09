<?php $__env->startSection('title','Test'); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Audiological Test</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">All Audiological Test- (<?php echo e($tests->count()); ?>)</h4>
                            <a href="<?php echo e(route('admin.test.create')); ?>" class="btn btn-primary btn-sm text-white float-right">Add New Test</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>#<?php echo e($loop->iteration); ?></td>
                                            <td>
                                                <div class="fit">
                                                    <img class="fit-image" src="<?php echo e($test->image? asset($test->image) : asset('images/default.jpg')); ?>" alt="">
                                                </div>
                                            </td>
                                            <td><?php echo e($test->price ?? 0); ?></td>
                                            <td><?php echo e(Str::limit($test->title,25) ?? ''); ?></td>
                                            <td><?php echo Str::words($test->description,30) ?? ''; ?></td>
                                            <td>
                                                <a href="<?php echo e(route('admin.test.edit',$test->id)); ?>" class="btn btn-success btn-sm text-white">Edit</a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-sm text-white" onclick="deleteType(<?php echo e($test->id); ?>)">Delete</a>
                                                <form id="deleteForm<?php echo e($test->id); ?>" action="<?php echo e(route('admin.test.destroy',$test->id)); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\Banglasoft\basic\htdocs\Therapylabonline\resources\views/backend/admin/pages/test/index.blade.php ENDPATH**/ ?>