<div id="header2" class="header4-area">
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="header-top-left">
                        <div class="logo-area">
                            <?php if(@$footer->logo == NULL): ?>
                            <img class="img-responsive" src="<?php echo e(asset('Assets/Frontend/img/logo-footer.png')); ?>" alt="logo">
                        <?php else: ?>
                            <img class="img-responsive" src="<?php echo e(asset('storage/images/logo/' .$footer->logo)); ?>" alt="logo">
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="header-top-right">
                        <ul>
                            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?php echo e(@$footer->telp); ?>"> <?php echo e(@$footer->telp); ?> </a></li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"><?php echo e(@$footer->email); ?></a></li>
                            <li>
                                <?php if(auth()->guard()->check()): ?>
                                    <a href="/home" class="apply-now-btn2">Home</a>
                                <?php else: ?>
                                    <a class="apply-now-btn2" href="<?php echo e(route('login')); ?>"> Masuk</a>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu-area bg-primary" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <nav id="desktop-nav">
                        <ul>
                            <li class="<?php echo e((request()->is('/')) ? 'active' : ''); ?>"><a href="/">Beranda</a></li>
                            <li><a href="#">Tentang Kami</a>
                                <ul>
                                    <li><a href=" <?php echo e(route('profile.sekolah')); ?> ">Profile Sekolah</a></li>
                                    <li><a href=" <?php echo e(route('visimisi.sekolah')); ?> ">Visi dan Misi</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Program</a>
                                <ul>
                                    <li class="has-child-menu"><a href="#">Program Studi</a>
                                        <ul class="thired-level">
                                            <?php $__currentLoopData = $jurusanM; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurusans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href=" <?php echo e(url('program', $jurusans->slug)); ?> "> <?php echo e($jurusans->nama); ?> </a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="<?php echo e((request()->is('berita')) ? 'active' : ''); ?>"><a href=" <?php echo e(route('berita')); ?> ">Berita</a></li>
                            <li><a href="<?php echo e(url('ppdb')); ?>" target="_blank">PPDB</a></li>

                           
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu Area Start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li class="active"><a href="#">Beranda</a></li>
                            <li><a href="#">Tentang Kami</a>
                                <ul>
                                    <li><a href=" <?php echo e(route('profile.sekolah')); ?> ">Profile Sekolah</a></li>
                                    <li><a href=" <?php echo e(route('visimisi.sekolah')); ?> ">Visi dan Misi</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Program</a>
                                <ul>
                                    <li class="has-child-menu"><a href="#">Program Studi</a>
                                        <ul class="thired-level">
                                            <?php $__currentLoopData = $jurusanM; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurusans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href=" <?php echo e(url('program', $jurusans->slug)); ?> "> <?php echo e($jurusans->nama); ?> </a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="<?php echo e((request()->is('berita')) ? 'active' : ''); ?>"><a href=" <?php echo e(route('berita')); ?> ">Berita</a></li>
                            <li><a href="<?php echo e(url('ppdb')); ?>" target="_blank">PPDB</a></li>

                            
                            <li>
                                <?php if(auth()->guard()->check()): ?>
                                    <a href=""><?php echo e(Auth::user()->name); ?></a>
                                <?php else: ?>
                                    <a href=" <?php echo e(route('login')); ?> ">Masuk</a>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu Area End --><?php /**PATH C:\laragon\www\sekolahku\resources\views/frontend/content/header.blade.php ENDPATH**/ ?>