<div class="video-area overlay-video bg-common-style" style="background-image: url('<?php echo e(asset('Assets/Frontend/img/banner/8.jpeg')); ?>');">
    <?php if($video != NULL): ?>
        <div class="container">
            <div class="video-content">
                <h2 class="video-title"><?php echo e($video->title); ?></h2>
                <p class="video-sub-title"><?php echo e($video->desc); ?></p>
                
                <?php
                    // Extract video ID from YouTube URL
                    $videoId = '';
                    if (preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $video->url, $match)) {
                        $videoId = $match[1];
                    }
                ?>

                    <!-- YouTube Iframe (Hidden by default) -->
                    <div id="videoPlayer" class="d-none">
                        <iframe 
                            width="100%" 
                            height="450" 
                            src="https://www.youtube.com/embed/<?php echo e($videoId); ?>?autoplay=1&rel=0" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<style>
.video-wrapper {
    max-width: 800px;
    margin: 0 auto;
}
.video-thumbnail {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}
.play-btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80px;
    height: 80px;
    background: rgba(255,255,255,0.9) !important;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}
.play-btn i {
    font-size: 30px;
    color: #002147;
    margin-left: 5px;
}
.play-btn:hover {
    background: #002147 !important;
    transform: translate(-50%, -50%) scale(1.1);
}
.play-btn:hover i {
    color: white;
}
#videoPlayer {
    position: relative;
    padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
    height: 0;
    overflow: hidden;
    border-radius: 10px;
}
#videoPlayer iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>

<script>
function playVideo() {
    document.getElementById('videoThumbnail').classList.add('d-none');
    document.getElementById('videoPlayer').classList.remove('d-none');
}
</script>
<?php /**PATH /home/nugwttbr/public_html/resources/views/frontend/content/video.blade.php ENDPATH**/ ?>