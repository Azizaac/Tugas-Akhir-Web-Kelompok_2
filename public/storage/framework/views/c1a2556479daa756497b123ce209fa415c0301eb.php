<div class="about1-area">
    <?php if($about != NULL): ?>
        <div class="container">
            <h1 class="about-title wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s"><?php echo e($about->title); ?></h1>
            <p class="about-sub-title wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s"> <?php echo e($about->desc); ?> </p>
            <div class="about-img-holder wow fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
                <img src="<?php echo e(asset('storage/images/about/' .$about->image)); ?>" alt="about" class="img-responsive" style="max-height: 328px; max-weidth:650px"/>
            </div>
        </div>
    <?php endif; ?>
</div><?php /**PATH C:\laragon\www\sekolahku\resources\views/frontend/content/about.blade.php ENDPATH**/ ?>