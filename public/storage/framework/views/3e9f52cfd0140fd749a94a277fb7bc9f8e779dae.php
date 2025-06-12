

<?php $__env->startSection('title'); ?>
Berita
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php $__env->startSection('about'); ?>
<div class="news-page-area py-5">
    <style>
        .news-box {
            transition: 0.3s ease;
        }

        .news-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }

        .news-img-holder {
            position: relative;
        }

        .news-date2 {
            position: absolute;
            bottom: 10px;
            right: 10px;
            font-size: 13px;
            padding: 4px 10px;
            background: rgba(0, 123, 255, 0.8);
            border-radius: 4px;
        }

        .sidebar-box {
            margin-bottom: 30px;
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 6px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.05);
        }

        .sidebar-title {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 15px;
        }

        .sidebar-categories li a {
            color: #333;
            text-decoration: none;
            display: block;
            padding: 5px 0;
            transition: color 0.3s;
        }

        .sidebar-categories li a:hover {
            color: #007bff;
        }

        .sidebar-latest-research-area ul {
            list-style: none;
            padding-left: 0;
        }

        .sidebar-latest-research-area li {
            display: flex;
            gap: 10px;
            margin-bottom: 12px;
        }

        .latest-research-img img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
        }

        .latest-research-content h6 {
            margin: 0;
            font-size: 12px;
            color: #666;
        }

        .latest-research-content p {
            margin: 2px 0 0;
            font-size: 13px;
            color: #333;
        }
    </style>

    <div class="container">
        <div class="row">
            <!-- Kolom utama -->
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="row">
                    <?php if($berita->isEmpty()): ?>
                        <div class="col-12 text-center">
                            <img src="<?php echo e(asset('Assets/Frontend/img/empty.svg')); ?>" class="img-fluid" loading="lazy" style="max-height: 300px; margin-top: 5%;" alt="No News Available">
                            <p class="text-muted">Belum ada berita.</p>
                        </div>
                    <?php else: ?>
                        <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $beritas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                            <div class="news-box shadow-sm border rounded">
                                <div class="news-img-holder">
                                    <a href="<?php echo e(route('detail.berita', $beritas->slug)); ?>">
                                        <img src="<?php echo e(asset('/storage/app/public/images/berita/' . $beritas->thumbnail)); ?>"
                                             class="img-fluid rounded-top" loading="lazy"
                                             alt="Berita Thumbnail"
                                             style="height: 200px; object-fit: cover; width: 100%;">
                                    </a>
                                    <ul class="news-date2 list-unstyled text-white text-center">
                                        <li><?php echo e(\Carbon\Carbon::parse($beritas->created_at)->format('d M, Y')); ?></li>
                                    </ul>
                                </div>
                                <div class="p-3">
                                    <h3 class="title-news-left-bold">
                                        <a href="<?php echo e(route('detail.berita', $beritas->slug)); ?>" class="text-dark fw-bold">
                                            <?php echo e($beritas->title); ?>

                                        </a>
                                    </h3>
                                    <ul class="title-bar-high news-comments list-unstyled d-flex justify-content-between text-muted small mt-2">
                                        <li><i class="fa fa-user"></i> <?php echo e($beritas->user->name); ?></li>
                                        <li><i class="fa fa-tags"></i> <?php echo e($beritas->kategori->nama); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
                <?php echo e($berita->links('frontend.content.paginate')); ?>

            </div>

            <!-- Sidebar -->
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="sidebar">
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Kategori</h3>
                            <ul class="sidebar-categories">
                                <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategoris): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="#"><?php echo e($kategoris->nama); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>

                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Berita Terbaru</h3>
                            <div class="sidebar-latest-research-area">
                                <ul>
                                    <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $beritas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <div class="latest-research-img">
                                            <a href="<?php echo e(route('detail.berita', $beritas->slug)); ?>">
                                                <img src="<?php echo e(asset('/storage/app/public/images/berita/' . $beritas->thumbnail)); ?>" class="img-responsive" alt="Berita">
                                            </a>
                                        </div>
                                        <div class="latest-research-content">
                                            <h6><?php echo e(\Carbon\Carbon::parse($beritas->created_at)->format('d M, Y')); ?></h6>
                                            <p><?php echo e($beritas->title); ?></p>
                                        </div>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Sidebar -->
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.Frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nugwttbr/public_html/resources/views/frontend/content/beritaAll.blade.php ENDPATH**/ ?>