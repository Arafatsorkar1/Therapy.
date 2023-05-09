<meta charset="utf-8">
<title><?php echo e(get_setting('website_name') ?? env('APP_NAME')); ?> | <?php echo $__env->yieldContent('title','Home'); ?></title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="Free HTML Templates" name="keywords">
<meta content="Free HTML Templates" name="description">

<!-- Favicon -->
<link href="<?php echo e(get_setting('website_icon') ? asset(get_setting('website_icon')) : asset('images/default.jpg')); ?>" rel="icon">
<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="<?php echo e(asset('/')); ?>assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="<?php echo e(asset('/')); ?>assets/frontend/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="<?php echo e(asset('/')); ?>assets/frontend/css/style.css" rel="stylesheet">
<style>
    .page-header{
        margin-bottom: 25px;
    }
    .fit-image{
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
</style>
<?php echo $__env->yieldContent('css'); ?>
<?php /**PATH D:\php\Banglasoft\basic\htdocs\Therapylabonline\resources\views/frontend/includes/header_links.blade.php ENDPATH**/ ?>