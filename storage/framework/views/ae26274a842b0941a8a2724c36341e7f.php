<script src="<?php echo e(asset('/')); ?>assets/backend/plugins/common/common.min.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/js/custom.min.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/js/settings.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/js/gleek.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/js/styleSwitcher.js"></script>

<!-- Chartjs -->
<script src="<?php echo e(asset('/')); ?>assets/backend/plugins/chart.js/Chart.bundle.min.js"></script>
<!-- Circle progress -->
<script src="<?php echo e(asset('/')); ?>assets/backend/plugins/circle-progress/circle-progress.min.js"></script>
<!-- Datamap -->
<script src="<?php echo e(asset('/')); ?>assets/backend/plugins/d3v3/index.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/plugins/topojson/topojson.min.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/plugins/datamaps/datamaps.world.min.js"></script>
<!-- Morrisjs -->
<script src="<?php echo e(asset('/')); ?>assets/backend/plugins/raphael/raphael.min.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/plugins/morris/morris.min.js"></script>
<!-- Pignose Calender -->
<script src="<?php echo e(asset('/')); ?>assets/backend/plugins/moment/moment.min.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
<!-- ChartistJS -->
<script src="<?php echo e(asset('/')); ?>assets/backend/plugins/chartist/js/chartist.min.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>

<script src="<?php echo e(asset('/')); ?>assets/backend/js/dashboard/dashboard-1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/plugins/tables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/js/app.js"></script>
<script src="<?php echo e(asset('/assets/backend/others/texteditor/editor.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/backend/others/texteditor/ckeditor.js')); ?>"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<?php echo $__env->yieldContent('script'); ?>
<?php /**PATH D:\php\Banglasoft\basic\htdocs\Therapylabonline\resources\views/backend/admin/includes/footer_links.blade.php ENDPATH**/ ?>