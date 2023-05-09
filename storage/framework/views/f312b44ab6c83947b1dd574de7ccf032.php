<?php $__env->startSection('title','All Traning'); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Traning</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="">
                                <h4 class="card-title d-inline">All Traning <span class="badge badge-pill badge-info"><?php echo e($tranings->count()); ?></span></h4>
                                <a href="<?php echo e(route('admin.traning.create')); ?>" class="btn btn-success shadow float-right text-white">Add Traning</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Category name</th>
                                        <th>Traning Title</th>
                                        <th>Price</th>
                                        <th>View</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $tranings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $traning): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>#<?php echo e($loop->iteration); ?></td>`
                                            <td><?php echo e(optional($traning->traningCategory)->name); ?></td>
                                            <td>
                                                <img src="<?php echo e(asset($traning->image)); ?>" class=" rounded-circle mr-3" style="width: 30px;height: 30px;" alt="">
                                                <?php echo e(optional($traning)->title); ?>

                                            </td>

                                            <td><?php echo e(optional($traning)->price); ?></td>
                                            <td><?php echo e(optional($traning)->view_count); ?></td>
                                            <td>
                                                <?php if(optional($traning)->status == 1): ?>
                                                    <a href="">
                                                        <span class="badge badge-success text-white badge-pill">Published</span>
                                                    </a>
                                                <?php else: ?>
                                                    <a href="">
                                                        <span class="badge badge-danger text-white badge-pill">Unpublished</span>
                                                    </a>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo e(route('admin.traning.edit',$traning->id)); ?>" class="btn btn-success btn-sm text-white">Edit</a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-sm text-white" onclick="deleteType(<?php echo e($traning->id); ?>)">Delete</a>
                                                <form id="deleteForm<?php echo e($traning->id); ?>" action="<?php echo e(route('admin.traning.destroy',$traning->id)); ?>" method="post">
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
                                        <th>Category name</th>
                                        <th>Traning Title</th>
                                        <th>Price</th>
                                        <th>View</th>
                                        <th>Status</th>
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

<?php echo $__env->make('backend.admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\Banglasoft\basic\htdocs\Therapylabonline\resources\views/backend/admin/pages/traning/index.blade.php ENDPATH**/ ?>