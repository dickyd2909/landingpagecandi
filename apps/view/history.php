<div id="bghis2">
    <div id="bohis2">
        <?php
            $hidb = $koneksi->query("SELECT * FROM content WHERE content_id='CO009' ORDER BY content_order ASC");
            $hidt = $hidb->fetch_array();
        ?>
        <div class="his2tit">HISTORY</div>
        <div class="his2desc"><?= $hidt['content_judul']; ?></div>
        <div class="his2img">
            <img src="assets/images/content/<?= $hidt['content_image']; ?>" alt="<?= $hidt['content_judul']; ?>" title="<?= $hidt['content_judul']; ?>">
        </div>
    </div>
</div>