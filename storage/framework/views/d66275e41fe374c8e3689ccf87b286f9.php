<?php $__env->startSection('title','All Traning Orders'); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Categories</a></li>
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
                                <h4 class="card-title d-inline">All Traning <span class="badge badge-pill badge-info"><?php echo e($orders->count()); ?></span></h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#Order Id</th>
                                        <th>User</th>
                                        <th>Traning</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>#<?php echo e($order->order_id); ?></td>
                                            <td>

                                                <?php echo e(optional($order->user)->name); ?>

                                            </td>
                                            <td>
                                                <img src="<?php echo e(asset($order->traning->image)); ?>" class=" rounded-circle mr-3" style="width: 30px;height: 30px;" alt="">
                                                <?php echo e(optional($order->traning)->title); ?>

                                            </td>

                                            <td><?php echo e(optional($order->traning)->price); ?></td>

                                            <td>
                                                <?php if($order->status == 1): ?>
                                                    <a href="">
                                                        <span class="badge badge-pill badge-success text-white font-weight-bold">Verified</span>
                                                    </a>
                                                <?php else: ?>
                                                    <a href="">
                                                        <span class="badge badge-pill badge-danger text-white font-weight-bold">Not Verified</span>
                                                    </a>
                                                <?php endif; ?>
                                            </td>

                                            <td>
                                                <a href="<?php echo e(route('admin.traning-order.show',$order->id)); ?>">
                                                    <span class="btn btn-primary rounded-full btn-sm"><i class="fa fa-eye"></i></span>
                                                </a>






                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <tfoot>

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

<?php echo $__env->make('backend.admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\Banglasoft\basic\htdocs\Therapylabonline\resources\views/backend/admin/pages/traning_order/index.blade.php ENDPATH**/ ?>