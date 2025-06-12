<?php $__env->startSection('alur_pendaftaran'); ?>
<div class="container">
    <!-- Title Section -->
    <div class="row">
        <div class="col-12">
            <div class="section-title-wrapper">
                <h2 class="section-title">Alur Pendaftaran PPDB</h2>
                <p class="section-subtitle">
                    Penerimaan Peserta Didik Baru (PPDB) SMK Negeri 5 Surakarta<br>
                    Tahun Ajaran 2024/2025
                </p>
            </div>
        </div>
    </div>

    <!-- Steps Section -->
    <div class="row justify-content-center mb-5">
        <!-- Step 1 -->
        <div class="col-lg-4 col-md-6">
            <div class="step-card">
                <div class="step-number">1</div>
                <div class="step-content">
                    <h4>Pembuatan Akun</h4>
                    <div class="step-date">11-24 Juni 2024</div>
                    <ul class="step-list">
                        <li>Kunjungi website: ppdb.jatengprov.go.id</li>
                        <li>Buat akun dengan email aktif</li>
                        <li>Siapkan scan dokumen yang diperlukan</li>
                        <li>Pastikan data terisi dengan benar</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="col-lg-4 col-md-6">
            <div class="step-card">
                <div class="step-number">2</div>
                <div class="step-content">
                    <h4>Verifikasi Berkas</h4>
                    <div class="step-date">11-24 Juni 2024</div>
                    <ul class="step-list">
                        <li>Kartu Keluarga</li>
                        <li>Akta Kelahiran</li>
                        <li>Ijazah/SKL</li>
                        <li>Rapor semester 1-5</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="col-lg-4 col-md-6">
            <div class="step-card">
                <div class="step-number">3</div>
                <div class="step-content">
                    <h4>Aktivasi Akun</h4>
                    <div class="step-date">11-24 Juni 2024</div>
                    <ul class="step-list">
                        <li>Tunggu verifikasi berkas</li>
                        <li>Aktivasi akun setelah berkas disetujui</li>
                        <li>Cek email untuk konfirmasi</li>
                        <li>Login ke akun yang sudah diaktivasi</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Step 4 -->
        <div class="col-lg-4 col-md-6">
            <div class="step-card">
                <div class="step-number">4</div>
                <div class="step-content">
                    <h4>Pendaftaran</h4>
                    <div class="step-date">24-25 Juni 2024</div>
                    <ul class="step-list">
                        <li>Login ke akun PPDB</li>
                        <li>Pilih jurusan yang diinginkan</li>
                        <li>Pilih sekolah tujuan</li>
                        <li>Lengkapi formulir pendaftaran</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Step 5 -->
        <div class="col-lg-4 col-md-6">
            <div class="step-card">
                <div class="step-number">5</div>
                <div class="step-content">
                    <h4>Pengumuman</h4>
                    <div class="step-date">1 Juli 2024</div>
                    <ul class="step-list">
                        <li>Login ke portal PPDB</li>
                        <li>Cek hasil seleksi online</li>
                        <li>Pengumuman pukul 23.59 WIB</li>
                        <li>Cetak bukti diterima</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Step 6 -->
        <div class="col-lg-4 col-md-6">
            <div class="step-card">
                <div class="step-number">6</div>
                <div class="step-content">
                    <h4>Daftar Ulang</h4>
                    <div class="step-date">3-12 Juli 2024</div>
                    <ul class="step-list">
                        <li>Daftar ulang ke sekolah</li>
                        <li>Lengkapi berkas asli</li>
                        <li>Ikuti orientasi siswa</li>
                        <li>Siap memulai pembelajaran</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Random Images Section -->
    <!-- Random Images Section -->
<div class="row mt-5">
    <div class="col-12">
        <div class="section-subtitle text-center mb-4">Banner PPDB</div>
    </div>
    <?php $__currentLoopData = ['spmb1', 'spmb2', 'spmb3', 'spmb4']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-4">
            <div class="ppdb-image-wrapper">
                <img src="<?php echo e(asset('Assets/Frontend/img/ppdb/' . $img . '.jpeg')); ?>" alt="PPDB Image">
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


<style>

    .ppdb-image-wrapper {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    background: #f9f9f9;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    height: auto;
    max-height: 180px; /* Ukuran relatif sedang */
    display: flex;
    align-items: center;
    justify-content: center;
}

.ppdb-image-wrapper img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    transition: transform 0.3s ease;
}

.ppdb-image-wrapper:hover img {
    transform: scale(1.05);
}

/* Section Title */
.section-title-wrapper {
    text-align: center;
    margin-bottom: 50px;
}

.section-title {
    color: #002147;
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 15px;
    position: relative;
    padding-bottom: 15px;
}

.section-title:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: #fdc800;
}

.section-subtitle {
    color: #666;
    font-size: 18px;
    line-height: 1.8;
}

/* Step Cards */
.step-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    margin-bottom: 30px;
    transition: all 0.3s ease;
    position: relative;
    padding: 25px;
    height: 100%;
}

.step-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.step-number {
    position: absolute;
    top: 15px;
    right: 15px;
    width: 35px;
    height: 35px;
    background: #fdc800;
    color: #002147;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    font-weight: 700;
    z-index: 1;
}

.step-content h4 {
    color: #002147;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 10px;
    padding-right: 40px;
}

.step-date {
    color: #fdc800;
    font-weight: 600;
    font-size: 15px;
    margin-bottom: 20px;
    padding: 5px 12px;
    background: rgba(253, 200, 0, 0.1);
    border-radius: 4px;
    display: inline-block;
}

.step-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.step-list li {
    color: #666;
    font-size: 14px;
    line-height: 1.6;
    margin-bottom: 12px;
    padding-left: 20px;
    position: relative;
}

.step-list li:before {
    content: "•";
    color: #fdc800;
    font-weight: bold;
    position: absolute;
    left: 0;
}

.step-list li:last-child {
    margin-bottom: 0;
}

/* PPDB Images */
.ppdb-image {
    border-radius: 8px;
    overflow: hidden;
    margin-bottom: 30px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    position: relative;
    width: 100%;
    padding-top: 75%; /* This creates a 4:3 aspect ratio */
}

.ppdb-image:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.ppdb-image img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.3s ease;
}

.ppdb-image:hover img {
    transform: scale(1.1);
}

@media (max-width: 1200px) {
    .ppdb-image {
        padding-top: 66.67%; /* 3:2 aspect ratio for slightly larger screens */
    }
}

@media (max-width: 768px) {
    .section-title {
        font-size: 28px;
    }
    
    .section-subtitle {
        font-size: 16px;
    }
    
    .step-content h4 {
        font-size: 18px;
    }

    .ppdb-image {
        padding-top: 60%; /* Slightly shorter on mobile */
    }
}

@media (max-width: 576px) {
    .ppdb-image {
        padding-top: 56.25%; /* 16:9 aspect ratio for mobile */
    }
}
</style>
<?php $__env->stopSection(); ?>
<?php /**PATH C:\laragon\www\sekolahku\Modules/PPDB\Resources/views/sections/alur_pendaftaran.blade.php ENDPATH**/ ?>