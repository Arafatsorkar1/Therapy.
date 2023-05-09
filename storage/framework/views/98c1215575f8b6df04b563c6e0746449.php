<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<title><?php echo e(get_setting('website_name') ?? config('app.name')); ?> | <?php echo $__env->yieldContent('title','#'); ?></title>
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(get_setting('website_icon') ? asset(get_setting('website_icon')) : asset('/assets/backend/images/favicon.png')); ?>">
<!-- Pignose Calender -->
<link href="<?php echo e(asset('/')); ?>assets/backend/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
<!-- Chartist -->
<link rel="stylesheet" href="<?php echo e(asset('/')); ?>assets/backend/plugins/chartist/css/chartist.min.css">
<link rel="stylesheet" href="<?php echo e(asset('/')); ?>assets/backend/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
<!-- Custom Stylesheet -->
<link href="<?php echo e(asset('/')); ?>assets/backend/css/style.css" rel="stylesheet">
<link href="<?php echo e(asset('/')); ?>assets/backend/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo e(asset('assets/backend/others/texteditor/editor.css')); ?>">
<style>
    .fit{
        width: 55px;
        height: 55px;
        overflow: hidden;
        border-radius: 100px;
    }
    .fit-image{
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
</style>
<?php echo $__env->yieldContent('style'); ?>
<?php /**PATH D:\php\Banglasoft\basic\htdocs\Therapylabonline\resources\views/backend/admin/includes/header_links.blade.php ENDPATH**/ ?>