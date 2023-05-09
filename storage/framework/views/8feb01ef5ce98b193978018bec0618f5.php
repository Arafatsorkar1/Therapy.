<?php $__env->startSection('title','Donner List'); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Donner List</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">Donner List- (<?php echo e($donners->count()); ?>)</h4>
                            <a href="<?php echo e(route('admin.donner.create')); ?>" class="btn btn-primary btn-sm text-white float-right">Add New </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Phone</th>
                                        <th>Donate Date</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $donners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $donner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>#<?php echo e($loop->iteration); ?></td>
                                            <td>#<?php echo e($donner->name ?? ''); ?></td>
                                            <td>
                                                <div class="fit">
                                                    <img class="fit-image" src="<?php echo e($donner->image? asset($donner->image) : asset('images/default.jpg')); ?>" alt="<?php echo e($donner->slug); ?>">
                                                </div>
                                            </td>
                                            <td><?php echo e($donner->phone ?? '017 *** ** ***'); ?></td>
                                            <td><?php echo e($donner->donate_date ?? ''); ?></td>
                                            <td>
                                                <a href="<?php echo e(route('admin.donner.edit',$donner->id)); ?>" class="btn btn-success btn-sm text-white">Edit</a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-sm text-white" onclick="deleteType(<?php echo e($donner->id); ?>)">Delete</a>
                                                <form id="deleteForm<?php echo e($donner->id); ?>" action="<?php echo e(route('admin.donner.destroy',$donner->id)); ?>" method="post">
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

<?php echo $__env->make('backend.admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\Banglasoft\basic\htdocs\Therapylabonline\resources\views/backend/admin/pages/donner/index.blade.php ENDPATH**/ ?>