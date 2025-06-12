<!doctype html>
<html class="no-js" lang="">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <?php echo $__env->make('layouts.Frontend.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Main Body Area Start Here -->
    <div id="wrapper">
        <?php echo $__env->yieldContent('content'); ?>
        

        
        <?php echo $__env->yieldContent('slider'); ?>

        <div class="about2-area">
            <?php echo $__env->yieldContent('studi'); ?>
        </div>

        <!-- Alur Pendaftaran Area Start Here -->
        <section class="registration-flow-area section-space">
            <?php echo $__env->yieldContent('alur_pendaftaran'); ?>
        </section>
        <!-- Alur Pendaftaran Area End Here -->
        
        <?php echo $__env->yieldContent('count'); ?>

        
        <?php echo $__env->yieldContent('why'); ?>

        
        <?php echo $__env->yieldContent('video'); ?>

        <!-- Footer Area Start Here -->
        <footer>
            <?php echo $__env->make('ppdb::layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Main Body Area End Here -->
    <?php echo $__env->make('layouts.Frontend.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\sekolah\Modules/PPDB\Resources/views/layouts/master.blade.php ENDPATH**/ ?>