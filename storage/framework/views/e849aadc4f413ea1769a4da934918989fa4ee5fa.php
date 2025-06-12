<div class="news-event-area">
    <style>
        .news-inner-area {
            margin-bottom: 30px;
        }

        .news-wrapper {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .news-wrapper li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }

        .news-img-holder {
            margin-right: 15px;
            flex-shrink: 0;
        }

        .news-img-holder img {
            width: 100px;
            height: 70px;
            object-fit: cover;
            border-radius: 4px;
        }

        .news-content-holder h3 {
            margin: 0 0 5px;
            font-size: 1rem;
        }

        .news-content-holder h3 a {
            text-decoration: none;
            color: #333;
            transition: color 0.3s ease;
        }

        .news-content-holder h3 a:hover {
            color: #007bff;
        }

        .post-date {
            font-size: 0.85rem;
            color: #999;
        }

        .news-btn-holder {
            margin-top: 15px;
        }

        .view-all-accent-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff6600;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .view-all-accent-btn:hover {
            background-color: #e65c00;
        }

        @media (max-width: 768px) {
            .news-wrapper li {
                flex-direction: column;
            }

            .news-img-holder {
                margin-bottom: 10px;
            }

            .news-img-holder img {
                width: 100%;
                height: auto;
            }
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 news-inner-area">
                <h2 class="title-default-left">Berita Terbaru</h2>
                <ul class="news-wrapper">
                    <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $beritas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <div class="news-img-holder">
                                <a href="<?php echo e(route('detail.berita', $beritas->slug)); ?>">
                                    <img src="<?php echo e(asset('storage/app/public/images/berita/' . $beritas->thumbnail)); ?>" alt="news">
                                </a>
                            </div>
                            <div class="news-content-holder">
                                <h3>
                                    <a href="<?php echo e(route('detail.berita', $beritas->slug)); ?>">
                                        <?php echo e($beritas->title); ?>

                                    </a>
                                </h3>
                                <div class="post-date"><?php echo e(\Carbon\Carbon::parse($beritas->created_at)->format('d F Y')); ?></div>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <div class="news-btn-holder">
                    <a href="<?php echo e(route('berita')); ?>" class="view-all-accent-btn">Lihat Semua</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\sekolah\resources\views/frontend/content/beritaEvent.blade.php ENDPATH**/ ?>