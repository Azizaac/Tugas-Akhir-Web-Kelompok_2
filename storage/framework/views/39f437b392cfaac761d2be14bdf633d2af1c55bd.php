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
        <!-- Header Area Start Here -->
        <header>
           <?php echo $__env->make('frontend.content.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </header>
        <!-- Header Area End Here -->

        <!-- Slider 1 Area Start Here -->
        <div class="slider1-area overlay-default">
            <?php echo $__env->yieldContent('slider'); ?>
        </div>
        <!-- Slider 1 Area End Here -->
        
        <!-- About 1 Area Start Here -->
            <?php echo $__env->yieldContent('about'); ?>
        <!-- About 1 Area End Here -->

        <!-- Video Area Start Here -->
            <?php echo $__env->yieldContent('video'); ?>
        <!-- Video Area End Here -->

        <!-- Lecturers Area Start Here -->
            <?php echo $__env->yieldContent('guru'); ?>
        <!-- Lecturers Area End Here -->

        <!-- News and Event Area Start Here -->
            <?php echo $__env->yieldContent('beritaEvent'); ?>
        <!-- News and Event Area End Here -->
        
        <!-- Footer Area Start Here -->
        <footer>
            <?php echo $__env->make('frontend.content.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Main Body Area End Here -->
    <?php echo $__env->make('layouts.Frontend.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\sekolah\resources\views/layouts/Frontend/app.blade.php ENDPATH**/ ?>