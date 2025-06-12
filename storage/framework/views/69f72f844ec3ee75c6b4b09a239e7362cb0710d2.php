<div class="bend niceties preview-1">
    <style>
        .slider-wrapper {
            position: relative;
            width: 100%;
            height: 80vh;
            min-height: 450px;
            max-height: 700px;
            overflow: hidden;
        }

        .slider-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .slider-slide.active {
            opacity: 1;
            z-index: 2;
        }

        .slider-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center center;
        }

        .slider-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
            box-sizing: border-box;
        }

        .title-container {
            max-width: 80%;
        }

        .title-container .title1 {
            font-size: clamp(1.8rem, 4vw, 3.5rem);
            font-weight: bold;
            margin-bottom: 2vh;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .title-container p {
            font-size: clamp(1rem, 1.8vw, 1.4rem);
            text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
        }

        @media (max-width: 768px) {
            .slider-wrapper {
                height: 70vh;
                min-height: 350px;
            }
        }

        @media (max-width: 480px) {
            .slider-wrapper {
                height: 60vh;
                min-height: 300px;
            }
        }
    </style>

    <div class="slider-wrapper">
        <div class="slider-slide active">
            <img src="<?php echo e(asset('Assets/Frontend/img/slider/slider-ppdb.jpeg')); ?>" alt="slider" class="slider-image" />
            <div class="slider-overlay">
                <div class="title-container">
                    <div class="title1">Selamat Datang di SMKN 5 Surakarta</div>
                    <p>SMK yang unggul dalam pengetahuan, berintegritas, berakhlak mulia, jujur, peduli dan berbudaya lingkungan di Era Global.</p>
                </div>
            </div>
        </div>
        <div class="slider-slide">
            <img src="<?php echo e(asset('Assets/Frontend/img/slider/slider-ppdb2.jpeg')); ?>" alt="slider" class="slider-image" />
            <div class="slider-overlay">
                <div class="title-container">
                    <div class="title1">Siap Mencetak Generasi Unggul</div>
                    <p>Dengan 9 Program Keahlian yang terakreditasi A dan fasilitas pembelajaran lengkap.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Slider auto-change
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slider-slide');

        setInterval(() => {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }, 5000);
    </script>
</div>

<?php /**PATH C:\laragon\www\sekolah\Modules/PPDB\Resources/views/frontend/content/slider.blade.php ENDPATH**/ ?>