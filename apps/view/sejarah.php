<div id="bghis">
    <div id="bohis">
        <div class="histit">
            Sejarah
        </div>
        <div class="hisbox clearfix">
            <?php
                $hdb = $koneksi->query("SELECT * FROM content WHERE contentcat_id = 'CC005' ORDER BY content_order ASC");
                $hdt = $hdb->fetch_array();
            ?>
            <div class="hisleft clearfix">
                <div class="hisleftimg">
                    <img src="assets/images/content/<?= $hdt['content_image']; ?>" alt="<?= $hdt['content_judul']; ?>" title="<?= $hdt['content_judul']; ?>">
                </div>
                <div class="hislefttit">
                    <?= $hdt['content_desc']; ?>
                </div>
            </div>
        </div>
    </div>
</div>