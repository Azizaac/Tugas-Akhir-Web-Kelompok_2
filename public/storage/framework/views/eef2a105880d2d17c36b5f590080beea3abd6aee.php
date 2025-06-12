<div class="video-area overlay-video bg-common-style" style="background-image: url('<?php echo e(asset('Assets/Frontend/img/banner/8.jpeg')); ?>');">
    <div class="container">
        <div class="video-content">
            <h2 class="video-title">Video Profil Sekolah</h2>
            <p class="video-sub-title">Lihat profil lengkap sekolah kami dalam video ini.</p>

            

                <!-- YouTube Iframe (Hidden by default) -->
                <div id="videoPlayer" class="d-none">
                    <iframe 
                        width="100%" 
                        height="450" 
                        src="https://www.youtube.com/embed/aGTG4o1Psx8?si=3zxYfzTw2uUCMK9j" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.video-area {
    padding: 100px 0;
    position: relative;
    background-size: cover;
    background-position: center;
}

.overlay-video::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 33, 71, 0.8);
}

.video-content {
    position: relative;
    text-align: center;
    color: #ffffff;
}

.video-title {
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 15px;
    color: #ffffff;
}

.video-sub-title {
    font-size: 18px;
    margin-bottom: 40px;
    color: #ffffff;
}

.video-wrapper {
    max-width: 800px;
    margin: 0 auto;
}

.video-thumbnail {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    position: relative;
    cursor: pointer;
    margin-bottom: 20px;
}

.video-thumbnail img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.3s ease;
}

.video-thumbnail:hover img {
    transform: scale(1.05);
}

.play-btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80px;
    height: 80px;
    background: rgba(255,255,255,0.9);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    cursor: pointer;
}

.play-btn i {
    font-size: 30px;
    color: #002147;
    margin-left: 5px;
}

.play-btn:hover {
    background: #fdc800;
    transform: translate(-50%, -50%) scale(1.1);
}

.play-btn:hover i {
    color: #002147;
}

#videoPlayer {
    position: relative;
    padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
    height: 0;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

#videoPlayer iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none;
}

@media (max-width: 768px) {
    .video-area {
        padding: 60px 0;
    }
    
    .video-title {
        font-size: 28px;
    }
    
    .video-sub-title {
        font-size: 16px;
        margin-bottom: 30px;
    }
    
    .play-btn {
        width: 60px;
        height: 60px;
    }
    
    .play-btn i {
        font-size: 24px;
    }
}
</style>

<script>
function playVideo() {
    const thumbnail = document.getElementById('videoThumbnail');
    const player = document.getElementById('videoPlayer');
    
    if (thumbnail && player) {
        thumbnail.style.display = 'none';
        player.classList.remove('d-none');
    }
}
</script>
<?php /**PATH C:\laragon\www\sekolahku\Modules/PPDB\Resources/views/frontend/content/video.blade.php ENDPATH**/ ?>