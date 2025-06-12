<!-- Alur Pendaftaran Area Start Here -->
<div class="registration-flow-area">
    <div class="container">
        <div class="section-title-center text-center">
            <h2 class="title-black">Alur Pendaftaran SPMB</h2>
            <p class="text-medium">Ikuti langkah-langkah pendaftaran berikut ini dengan teliti</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="flow-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="flow-img">
                        <img src="<?php echo e(asset('Assets/Frontend/img/alur/step1.jpg')); ?>" alt="Registrasi Online">
                        <div class="flow-number">1</div>
                    </div>
                    <div class="flow-content">
                        <h3>Registrasi Online</h3>
                        <p>Daftar akun dan isi formulir pendaftaran secara online melalui website SPMB</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="flow-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="flow-img">
                        <img src="<?php echo e(asset('Assets/Frontend/img/alur/step2.jpg')); ?>" alt="Upload Berkas">
                        <div class="flow-number">2</div>
                    </div>
                    <div class="flow-content">
                        <h3>Upload Berkas</h3>
                        <p>Upload dokumen persyaratan yang dibutuhkan (Ijazah, SKHUN, dll)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="flow-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="flow-img">
                        <img src="<?php echo e(asset('Assets/Frontend/img/alur/step3.jpg')); ?>" alt="Pembayaran">
                        <div class="flow-number">3</div>
                    </div>
                    <div class="flow-content">
                        <h3>Pembayaran Biaya Pendaftaran</h3>
                        <p>Lakukan pembayaran biaya pendaftaran melalui bank yang ditunjuk</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="flow-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="flow-img">
                        <img src="<?php echo e(asset('Assets/Frontend/img/alur/step4.jpg')); ?>" alt="Verifikasi">
                        <div class="flow-number">4</div>
                    </div>
                    <div class="flow-content">
                        <h3>Verifikasi Berkas</h3>
                        <p>Tim SPMB akan memverifikasi kelengkapan berkas pendaftaran Anda</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="flow-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="flow-img">
                        <img src="<?php echo e(asset('Assets/Frontend/img/alur/step5.jpg')); ?>" alt="Ujian">
                        <div class="flow-number">5</div>
                    </div>
                    <div class="flow-content">
                        <h3>Ujian Seleksi</h3>
                        <p>Ikuti ujian seleksi sesuai jadwal yang telah ditentukan</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="flow-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                    <div class="flow-img">
                        <img src="<?php echo e(asset('Assets/Frontend/img/alur/step6.jpg')); ?>" alt="Pengumuman">
                        <div class="flow-number">6</div>
                    </div>
                    <div class="flow-content">
                        <h3>Pengumuman Hasil</h3>
                        <p>Cek hasil kelulusan melalui website atau email yang terdaftar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.registration-flow-area {
    padding: 80px 0;
    background: #f5f5f5;
}

.section-title-center {
    margin-bottom: 50px;
}

.title-black {
    color: #222;
    margin-bottom: 15px;
    font-weight: 700;
}

.flow-box {
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
    margin-bottom: 30px;
    box-shadow: 0 2px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.flow-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.15);
}

.flow-img {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.flow-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.flow-number {
    position: absolute;
    top: 10px;
    right: 10px;
    width: 40px;
    height: 40px;
    background: #ff6600;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    font-weight: bold;
}

.flow-content {
    padding: 20px;
}

.flow-content h3 {
    font-size: 18px;
    margin-bottom: 10px;
    color: #222;
    font-weight: 600;
}

.flow-content p {
    color: #666;
    margin: 0;
    line-height: 1.6;
}

@media (max-width: 768px) {
    .registration-flow-area {
        padding: 50px 0;
    }
    
    .flow-img {
        height: 180px;
    }
}
</style> <?php /**PATH C:\laragon\www\sekolahku\resources\views/frontend/content/alur.blade.php ENDPATH**/ ?>