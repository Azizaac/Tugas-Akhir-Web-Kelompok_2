
<?php $__env->startSection('title'); ?>
    Visi dan Misi
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startSection('about'); ?>
        <div class="container">
            <?php if($visimisi): ?>
                <div class="row about-page1-inner" style="margin-top: 5%">
                  <!-- Teks Visi & Misi -->
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-3" style="font-size: 2rem;">Visi</h2>
                    <p class="text-justify lh-lg" style="font-size: 1.3rem;">
                        <?php echo nl2br(e($visimisi->visi)); ?>

                    </p>

                    <h2 class="fw-bold mt-4 mb-3" style="font-size: 2rem;">Misi</h2>
                    <p class="text-justify lh-lg" style="font-size: 1.3rem;">
                        <?php echo nl2br(e($visimisi->misi)); ?>

                    </p>
                </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="about-page-img-holder">
                            <img src="<?php echo e(asset('storage/app/public/images/visimisi/'.$visimisi->image)); ?>" class="img-responsive" alt="visimisi">
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <img src="<?php echo e(asset('Assets/Frontend/img/empty.svg')); ?>" class="img-responsive" style="object-fit:cover; margin-top:5% !important; display: block;
            margin: 0 auto;">
            <?php endif; ?>
        </div>
    <?php $__env->stopSection(); ?>

   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.Frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sekolahku\resources\views/frontend/content/visimisi.blade.php ENDPATH**/ ?>