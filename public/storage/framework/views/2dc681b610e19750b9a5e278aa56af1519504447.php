

<?php $__env->startSection('title'); ?>
Profile Sekolah
<?php $__env->stopSection(); ?>

<?php $__env->startSection('about'); ?>
<div class="container py-5">
    <?php if($profile): ?>
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 col-md-10 text-center">
            <img src="<?php echo e(asset('/storage/app/public/images/profileSekolah/' . $profile->image)); ?>"
                alt="Profile Sekolah"
                class="img-fluid rounded shadow-sm mb-4"
                style="max-height: 400px; object-fit: cover;">
        </div>
    </div>

    <div class="text-center mb-4">
        <h2 class="fw-semibold"><?php echo e($profile->title); ?></h2>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10 col-md-11">
            <div class="px-md-4">
                <p class="text-justify lh-lg" style="font-size: 1.1rem;">
                    <?php echo nl2br(e($profile->content)); ?>

                </p>
            </div>
        </div>
    </div>

    <!-- Struktur Organisasi Section -->
    <div class="struktur-organisasi mt-5">
        <div class="text-center mb-4">
            <h2 class="fw-semibold">Struktur Organisasi</h2>
            <p class="text-muted">SMKN 5 Surakarta Tahun Ajaran 2023/2024</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-body p-4 text-center">
                        <div class="struktur-img-container">
                            <img src="<?php echo e(asset('storage/images/profileSekolah/Struktur-Smkn5.png')); ?>"
                                alt="Struktur Organisasi SMKN 5 Surakarta"
                                class="img-fluid struktur-img">
                        </div>
                    </div>
                    <div class="card-footer bg-light text-center py-3" style="margin-top: 20px;">
                        <button class="btn btn-primary" onclick="window.open('<?php echo e(asset('storage/images/profileSekolah/Struktur-Smkn5.png')); ?>', '_blank')" style="margin-top: 20px;">
                            <i class="fa fa-search-plus me-2"></i>Lihat Gambar Lebih Besar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php else: ?>
    <div class="text-center">
        <img src="<?php echo e(asset('Assets/Frontend/img/empty.svg')); ?>"
            alt="Empty"
            class="img-fluid my-4"
            style="max-height: 300px;">
        <p class="text-muted">Belum ada data profil sekolah.</p>
    </div>
    <?php endif; ?>
</div>

<style>
    .struktur-organisasi {
        background: #f8f9fa;
        padding: 60px 0;
        margin-top: 40px;
    }

    .struktur-organisasi .card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        max-width: 1200px;
        margin: 0 auto;
    }

    .struktur-img-container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        min-height: 400px;
    }

    .struktur-img {
        max-width: 1000px;
        width: auto;
        height: auto;
        object-fit: contain;
        margin: 0 auto;
        border-radius: 8px;
        transition: transform 0.3s ease;
    }

    .struktur-img:hover {
        transform: scale(1.02);
    }

    .text-justify {
        text-align: justify;
        text-indent: 2em;
    }

    @media (max-width: 1200px) {
        .struktur-img {
            max-width: 100%;
        }
    }

    @media (max-width: 768px) {
        .container {
            padding-left: 15px;
            padding-right: 15px;
        }

        .text-justify {
            text-align: left;
        }

        .struktur-organisasi .card {
            margin: 0 15px;
        }
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('guru'); ?>
<?php echo $__env->make('frontend.content.guru', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sekolahku\resources\views/frontend/content/profileSekolah.blade.php ENDPATH**/ ?>