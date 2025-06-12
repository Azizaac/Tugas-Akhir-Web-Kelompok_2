
<?php $__env->startSection('title'); ?>
    Sekolahku
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    
    <?php $__env->startSection('slider'); ?>
        <?php echo $__env->make('frontend.content.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>

    
    <?php $__env->startSection('about'); ?>
        <?php echo $__env->make('frontend.content.about', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>

    
    <?php $__env->startSection('video'); ?>
        <?php echo $__env->make('frontend.content.video', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>

    
    <?php $__env->startSection('contact-info'); ?>
        <?php echo $__env->make('frontend.content.contact-info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>

     
     <?php $__env->startSection('beritaEvent'); ?>
        <?php echo $__env->make('frontend.content.beritaEvent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nugwttbr/public_html/resources/views/frontend/welcome.blade.php ENDPATH**/ ?>