<div class="footer-area-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="footer-box">
                    <a href="/">
                        <?php if(@$footer->logo == NULL): ?>
                            <img class="img-responsive" src="<?php echo e(asset('Assets/Frontend/img/logo-footer.png')); ?>" alt="logo">
                        <?php else: ?>
                            <img class="img-responsive" src="<?php echo e(asset('storage/images/logo/' .$footer->logo)); ?>" alt="logo">
                        <?php endif; ?>
                    </a>
                    <div class="footer-about">
                        <p> <?php echo e(@$footer->desc); ?> </p>
                    </div>
                    <ul class="footer-social">
                        <li><a href="<?php echo e('https://www.linkedin.com/in',@$footer->linkedln); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="<?php echo e('https://www.twitter.com/',@$footer->twitter); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="<?php echo e('https://www.facebook.com/',@$footer->facebook); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="<?php echo e('https://www.instagram.com/',@$footer->instagram); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="footer-box">
                    <h3>Informasi</h3>
                    <ul class="corporate-address">
                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?php echo e(@$footer->telp); ?>"> <?php echo e(@$footer->telp); ?></a></li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo e(@$footer->email); ?></li>
                    </ul>
                    <div class="newsletter-area">
                        <h3>Ingin mendapat berita terupdate ?</h3>
                        <div class="input-group stylish-input-group">
                            <input type="text" placeholder="Masukan email kamu disini" class="form-control">
                            <span class="input-group-addon">
                                    <button type="submit">
                                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                    </button>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="footer-box">
                    <h3>Photos</h3>
                    <ul class="flickr-photos">
                        <li>
                            <a href="#"><img class="img-responsive" src="<?php echo e(asset('Assets/Frontend/img/footer/latar1.jpg')); ?>" alt="flickr"></a>
                        </li>
                        <li>
                            <a href="#"><img class="img-responsive" src="<?php echo e(asset('Assets/Frontend/img/footer/latar2.jpg')); ?>" alt="flickr"></a>
                        </li>
                        <li>
                            <a href="#"><img class="img-responsive" src="<?php echo e(asset('Assets/Frontend/img/footer/latar3.jpg')); ?>" alt="flickr"></a>
                        </li>
                        <li>
                            <a href="#"><img class="img-responsive" src="<?php echo e(asset('Assets/Frontend/img/footer/latar4.jpg')); ?>" alt="flickr"></a>
                        </li>
                        <li>
                            <a href="#"><img class="img-responsive" src="<?php echo e(asset('Assets/Frontend/img/footer/latar5.jpg')); ?>" alt="flickr"></a>
                        </li>
                        <li>
                            <a href="#"><img class="img-responsive" src="<?php echo e(asset('Assets/Frontend/img/footer/latar6.jpg')); ?>" alt="flickr"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-area-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <p>&copy; <?php echo e(date('Y')); ?> <a href="" target="_blank">Kelompok 2</a> All Rights Reserved.</p>
            </div>
            
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\sekolah\Modules/PPDB\Resources/views/layouts/footer.blade.php ENDPATH**/ ?>