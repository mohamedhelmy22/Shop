<title><?php echo $__env->yieldContent('title'); ?></title>

<?php if( Config::get('app.locale') == 'ar'): ?>
    <!--RTL Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-PJsj/BTMqILvmcej7ulplguok8ag4xFTPryRq8xevL7eBYSmpXKcbNVuy+P0RMgq"
          crossorigin="anonymous">
<?php else: ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
          crossorigin="anonymous">

<?php endif; ?>

<link rel="stylesheet" href="<?php echo e(asset('assets/css/owl/owl.carousel.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/owl/owl.theme.default.css')); ?>">


<?php echo $__env->yieldContent('css'); ?>

<?php /**PATH C:\xampp\htdocs\shop\resources\views/website/layouts/head.blade.php ENDPATH**/ ?>