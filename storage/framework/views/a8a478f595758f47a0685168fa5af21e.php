<?php $__env->startSection('title','All Answers'); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Answers</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <?php echo $__env->make('backend.admin.component.all_order_tabs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <div class="tab-content br-n pn">
                                <div id="navpills-1" class="tab-pane active">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="">
                                                        <h4 class="card-title d-inline">All Orders <span class="badge badge-pill badge-info"></span></h4>

                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered zero-configuration">
                                                            <thead>
                                                            <tr>
                                                                <th>#SL</th>
                                                                <th>Order Id</th>
                                                                <th>Assessment</th>
                                                                <th>User Name</th>
                                                                <th>Pay</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $__currentLoopData = $assessment_orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><?php echo e($loop->iteration); ?></td>
                                                                    <td><a href="<?php echo e(route('admin.all-order.show',$order->id ?? '')); ?>">
                                                                            <?php echo e($order->order_id ?? ''); ?>

                                                                        </a>
                                                                    </td>
                                                                    <td><?php echo e(Str::limit($order->category->name,20) ?? ''); ?></td>
                                                                    <td><?php echo e(Str::limit($order->user->name,20) ?? ''); ?></td>
                                                                    <td><?php echo e($order->pay_balance); ?></td>
                                                                    <td>
                                                                        <a href="<?php echo e(route('admin.all-order.show',$order->id ?? '')); ?>" class="btn btn-primary btn-sm">View</a>
                                                                        <a href="<?php echo e(route('admin.generate-report.index',$order->id ?? '')); ?>" class="btn btn-success btn-sm text-white">Report</a>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <th>#SL</th>
                                                                <th>Order Id</th>
                                                                <th>Assessment</th>
                                                                <th>User Name</th>
                                                                <th>Pay</th>
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
                                <div id="navpills-2" class="tab-pane">
                                    <div class="row align-items-center">
                                        <div class="col-sm-6 col-md-4 col-xl-2">
                                            <img src="images/big/card-3.png" alt="" class="img-fluid thumbnail m-r-15">
                                        </div>
                                        <div class="col-sm-6 col-md-8 col-xl-10">
                                            <p>Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="navpills-3" class="tab-pane">
                                    <div class="row align-items-center">
                                        <div class="col-sm-6 col-md-4 col-xl-2">
                                            <img src="images/big/card-1.png" alt="" class="img-fluid thumbnail m-r-15">
                                        </div>
                                        <div class="col-sm-6 col-md-8 col-xl-10">
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p>
                                            <p>Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- #/ container -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\Banglasoft\basic\htdocs\Therapylabonline\resources\views/backend/admin/pages/order/assessment/index.blade.php ENDPATH**/ ?>