

<?php $__env->startSection('title'); ?>
    PPDB SMK NEGERI 5 SURAKARTA
<?php $__env->stopSection(); ?>

<?php $__env->startSection('alur_pendaftaran'); ?>
    <?php echo $alur_pendaftaran; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startSection('slider'); ?>
        <?php echo $__env->make('ppdb::frontend.content.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('studi'); ?>
        <?php echo $__env->make('ppdb::frontend.content.studi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('count'); ?>
        <?php echo $__env->make('ppdb::frontend.content.count', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('why'); ?>
        <?php echo $__env->make('ppdb::frontend.content.why', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('video'); ?>
        <?php echo $__env->make('ppdb::frontend.content.video', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ppdb::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nugwttbr/public_html/Modules/PPDB/Resources/views/index.blade.php ENDPATH**/ ?>