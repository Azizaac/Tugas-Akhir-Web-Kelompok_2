
<?php $__env->startSection('title'); ?>
Program Studi <?php echo e($jurusan->nama); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php $__env->startSection('about'); ?>
<div class="about-page1-area">
    <div class="container">
        <div class="row about-page1-inner">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="about-page-content-holder">
                    <p class="text-justify lh-lg" style="font-size: 1.3rem;">
                        <?php echo nl2br(e($jurusan->dataJurusan->content)); ?>

                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="about-page-img-holder">
                    <img src="<?php echo e(asset('storage/images/jurusan/' .$jurusan->dataJurusan->image)); ?>" class="img-responsive" alt="about">
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nugwttbr/public_html/resources/views/frontend/program/jurusan/show.blade.php ENDPATH**/ ?>