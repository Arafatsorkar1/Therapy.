<?php $__env->startSection('title','users'); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All users</a></li>
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
                                <h4 class="card-title d-inline">All Users <span class="badge badge-pill badge-info"><?php echo e($users->count()); ?></span></h4>

                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>User Name</th>
                                        <th>Register At</th>
                                        <th>Email</th>
                                        <th>Order Traning</th>
                                        <th>Order Assessment</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>#<?php echo e($loop->iteration); ?></td>`
                                            <td><?php echo e($user->name); ?></td>
                                            <td><?php echo e($user->created_at->diffForHumans()); ?></td>
                                            <td><?php echo e($user->email); ?></td>
                                            <td><?php echo e(optional($user->traningOrders)->count()); ?></td>
                                            <td><?php echo e(optional($user->assessmentOrders)->count()); ?></td>
                                            <td>
                                                <a href="<?php echo e(route('admin.user.show',$user->id)); ?>" class="btn btn-success btn-sm text-white">View</a>





                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#SL</th>
                                        <th>User Name</th>
                                        <th>Register At</th>
                                        <th>Email</th>
                                        <th>Order Traning</th>
                                        <th>Order Assessment</th>
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

<?php echo $__env->make('backend.admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\Banglasoft\basic\htdocs\Therapylabonline\resources\views/backend/admin/pages/user/index.blade.php ENDPATH**/ ?>