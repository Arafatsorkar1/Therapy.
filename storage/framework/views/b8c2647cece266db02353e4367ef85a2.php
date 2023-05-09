<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Users Information</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-img-top">
                                    <div class="">
                                        <img class="img-fluid" src="<?php echo e(asset($user->image) ?? asset('images/default.jpg')); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <?php if($user->name): ?>
                                            <tr>
                                                <th>Name : </th>
                                                <td><?php echo e($user->name); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                        <?php if($user->phone): ?>
                                            <tr>
                                                <th>Phone : </th>
                                                <td><?php echo e($user->phone); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                        <?php if($user->email): ?>
                                            <tr>
                                                <th>Email : </th>
                                                <td><?php echo e($user->email); ?></td>
                                            </tr>
                                        <?php endif; ?>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-7"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="">
                                <h4 class="card-title d-inline">All Orders Assessment <span class="badge badge-pill badge-info"><?php echo e($user->assessmentOrders->count()); ?></span></h4>
                                
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Order Id</th>
                                        <th>Assessment Name</th>
                                        <th>User</th>
                                        <th>Total Number</th>
                                        <th>Price</th>
                                        <th>Sended Number</th>
                                        <th>TransactionId</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $user->assessmentOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>#<?php echo e($loop->iteration); ?></td>`
                                            <td><?php echo e(optional($order)->order_id); ?></td>
                                            <td><?php echo e(optional($order->category)->name); ?></td>
                                            <td>
                                                <a href="<?php echo e(route('admin.user.show',optional($order->user)->id)); ?>"><?php echo e(optional($order->user)->name); ?></a>
                                            </td>
                                            <td><?php echo e(optional($order)->total_mark); ?></td>
                                            <td><?php echo e(optional($order)->pay_balance); ?></td>
                                            <td><?php echo e(optional($order)->sended_number); ?></td>
                                            <td><?php echo e(optional($order)->transaction_id); ?></td>
                                            <td>
                                                <?php if(optional($order)->payment_method == 'bkash'): ?>
                                                    <img src="<?php echo e(asset('/images/')); ?>" class=" rounded-circle mr-3" alt="bkash">
                                                <?php elseif(optional($order)->payment_method == 'rocket'): ?>
                                                    <img src="<?php echo e(asset('/images/')); ?>" class=" rounded-circle mr-3" alt="rocket">
                                                <?php else: ?>
                                                    <img src="<?php echo e(asset('/images/')); ?>" class=" rounded-circle mr-3" alt="nogod">
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if(optional($order)->status == 1): ?>
                                                    <a href="">
                                                        <span class="badge badge-success text-white badge-pill">Verified</span>
                                                    </a>
                                                <?php else: ?>
                                                    <a href="<?php echo e(route('admin.assessment-order-verifi',$order->id)); ?>">
                                                        <span class="badge badge-warning text-white badge-pill">Not Verified</span>
                                                    </a>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo e(route('admin.generate-report.index',optional($order)->id)); ?>" class="btn btn-success btn-sm text-white">Report</a>
                                                
                                                
                                                
                                                
                                                
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Order Id</th>
                                        <th>Assessment Name</th>
                                        <th>User</th>
                                        <th>Total Number</th>
                                        <th>Price</th>
                                        <th>Sended Number</th>
                                        <th>TransactionId</th>
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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="">
                                <h4 class="card-title d-inline">All Tranings <span class="badge badge-pill badge-info"><?php echo e($user->traningOrders->count()); ?></span></h4>

                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Order Id</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Pay Price</th>
                                        <th>Payment Method</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $user->traningOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $traning): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>#<?php echo e($loop->iteration); ?></td>`
                                            <td><?php echo e(optional($traning)->order_id); ?></td>`
                                            <td><?php echo e(optional($traning->traning)->title); ?></td>
                                            <td><?php echo e(optional($traning->traning)->price); ?></td>
                                            <td><?php echo e(optional($traning)->pay_balance); ?></td>
                                            <td><?php echo e(Str::upper(optional($traning)->payment_method)); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Order Id</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Pay Price</th>
                                        <th>Payment Method</th>
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

<?php echo $__env->make('backend.admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\Banglasoft\basic\htdocs\Therapylabonline\resources\views/backend/admin/pages/user/show.blade.php ENDPATH**/ ?>