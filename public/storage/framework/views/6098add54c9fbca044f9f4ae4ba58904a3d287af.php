

<?php $__env->startSection('title'); ?>
<?php echo e($berita->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php $__env->startSection('about'); ?>
<div class="news-details-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="row news-details-page-inner">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <<div class="news-img-holder">
                            <img src="<?php echo e(asset('/storage/app/public/images/berita/' . $berita->thumbnail)); ?>"
                                class="img-responsive fixed-img"
                                alt="<?php echo e($berita->title); ?>">
                            <ul class="news-date1">
                                <li><?php echo e(\Carbon\Carbon::parse($berita->created_at)->format('d M')); ?></li>
                                <li><?php echo e(\Carbon\Carbon::parse($berita->created_at)->format('Y')); ?></li>
                            </ul>
                    </div>

                    <h2 class="title-default-left-bold-lowhight"><a href="#"><?php echo e($berita->title); ?></a></h2>
                    <ul class="title-bar-high news-comments">
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span>By</span> <?php echo e($berita->user->name); ?></a></li>
                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i><?php echo e($berita->kategori->nama); ?></a></li>
                    </ul>
                    <div class="px-md-5">
                <p class="text-justify lh-lg" style="font-size: 1.1rem;">
                    <?php echo nl2br(e($berita->content)); ?>

                </p>
            </div>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
            <div class="sidebar-box">
                <div class="sidebar-box-inner">
                    <h3 class="sidebar-title">Kategori</h3>
                    <ul class="sidebar-categories">
                        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategoris): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href=""> <?php echo e($kategoris->nama); ?> </a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
            <div class="sidebar-box">
                <div class="sidebar-box-inner">
                    <h3 class="sidebar-title">Berita Terbaru</h3>
                    <div class="sidebar-latest-research-area">
                        <ul>
                            <?php $__currentLoopData = $beritaOther; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $beritas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <div class="latest-research-img">
                                    <a href="<?php echo e(route('detail.berita', $beritas->slug)); ?>"><img src="<?php echo e(asset('storage/images/berita/' .$beritas->thumbnail)); ?>" class="img-responsive" alt="skilled"></a>
                                </div>
                                <div class="latest-research-content">
                                    <h6><?php echo e(Carbon\Carbon::parse($beritas->created_at)->format('d M, Y')); ?></h6>
                                    <p style="font-size: 12px"><?php echo e($beritas->title); ?></p>
                                </div>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nugwttbr/public_html/resources/views/frontend/content/showBerita.blade.php ENDPATH**/ ?>