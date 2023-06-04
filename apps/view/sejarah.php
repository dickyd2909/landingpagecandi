<div id="bghis">
    <div id="bohis">
    <div class="galtit">
            Sejarah
        </div>
        <div class="galdesc">
            Sejarah Candi Muara Takus
        </div>
        <div class="hisbox clearfix">
            <?php
                $hdb = $koneksi->query("SELECT * FROM content WHERE contentcat_id = 'CC005' AND content_id !='CO009' ORDER BY content_order ASC");
                $hdt = $hdb->fetch_array();
            ?>
            <div class="hisleft clearfix">
                <div class="hisleftimg">
                    <img src="assets/images/content/<?= $hdt['content_image']; ?>" alt="<?= $hdt['content_judul']; ?>" title="<?= $hdt['content_judul']; ?>">
                </div>
                <div class="hisleftbox">
                    <div class="hislefttit">
                        <?= $hdt['content_judul']; ?>
                    </div>
                    <div class="hisleftdesc">
                        <?= $hdt['content_desc']; ?>
                    </div>
                </div>     
            </div>
            <div class="hisleft clearfix">
                <div class="hisleftimg">
                    <img src="assets/images/content/<?= $hdt['content_image']; ?>" alt="<?= $hdt['content_judul']; ?>" title="<?= $hdt['content_judul']; ?>">
                </div>
                <div class="hisleftbox">
                    <div class="hislefttit">
                        <?= $hdt['content_judul']; ?>
                    </div>
                    <div class="hisleftdesc">
                        <?= $hdt['content_desc']; ?>
                    </div>
                </div>     
            </div>
            <div class="hisleft clearfix">
                <div class="hisleftimg">
                    <img src="assets/images/content/<?= $hdt['content_image']; ?>" alt="<?= $hdt['content_judul']; ?>" title="<?= $hdt['content_judul']; ?>">
                </div>
                <div class="hisleftbox">
                    <div class="hislefttit">
                        <?= $hdt['content_judul']; ?>
                    </div>
                    <div class="hisleftdesc">
                        <?= $hdt['content_desc']; ?>
                    </div>
                </div>     
            </div>
            <div class="hisleft clearfix">
                <div class="hisleftimg">
                    <img src="assets/images/content/<?= $hdt['content_image']; ?>" alt="<?= $hdt['content_judul']; ?>" title="<?= $hdt['content_judul']; ?>">
                </div>
                <div class="hisleftbox">
                    <div class="hislefttit">
                        <?= $hdt['content_judul']; ?>
                    </div>
                    <div class="hisleftdesc">
                        <?= $hdt['content_desc']; ?>
                    </div>
                </div>     
            </div>
        </div>
    </div>
</div>