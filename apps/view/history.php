<div id="bghis2">
    <div id="bohis2">
        <?php
            $hidb = $koneksi->query("SELECT * FROM content WHERE content_id='CO009' ORDER BY content_order ASC");
            $hidt = $hidb->fetch_array();
        ?>
        <div class="his2tit">HISTORY</div>
        <div class="his2desc"><?= $hidt['content_judul']; ?></div>
        <div class="his2img">
        <video class="video" preload="auto" autoplay loop muted>
            <source src="assets/video/animation_new.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        </div>
    </div>
</div>