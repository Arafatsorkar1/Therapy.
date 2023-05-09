<?php $__env->startSection('title','Language Therapy'); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Language Therapy</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">All Language Therapy- (<?php echo e($therapys->count()); ?>)</h4>
                            <a href="<?php echo e(route('admin.language-therapy.create')); ?>" class="btn btn-primary btn-sm text-white float-right">Add New Therapy</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $therapys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $therapy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>#<?php echo e($loop->iteration); ?></td>
                                            <td>
                                                <div class="fit">
                                                    <img class="fit-image" src="<?php echo e($therapy->image? asset($therapy->image) : asset('images/default.jpg')); ?>" alt="">
                                                </div>
                                            </td>
                                            <td><?php echo e(Str::limit($therapy->title,25) ?? ''); ?></td>
                                            <td><?php echo Str::words($therapy->description,30) ?? ''; ?></td>
                                            <td>
                                                <a href="<?php echo e(route('admin.language-therapy.edit',$therapy->id)); ?>" class="btn btn-success btn-sm text-white">Edit</a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-sm text-white" onclick="deleteType(<?php echo e($therapy->id); ?>)">Delete</a>
                                                <form id="deleteForm<?php echo e($therapy->id); ?>" action="<?php echo e(route('admin.language-therapy.destroy',$therapy->id)); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Name</th>
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

<?php echo $__env->make('backend.admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\Banglasoft\basic\htdocs\Therapylabonline\resources\views/backend/admin/pages/therapy/therapy/index.blade.php ENDPATH**/ ?>