<div id="bghis">
    <div id="bohis">
    <div class="galtit">
            Sejarah
        </div>
        <div class="galdesc">
            <?php
                $tdb = $koneksi->query("SELECT * FROM content WHERE content_id = 'CO015'");
                $tdt = $tdb->fetch_array();
            ?>
            <?= $tdt['content_judul']; ?>
        </div>
        <div id="hisbox" class="clearfix">
            <?php
                $hdb = $koneksi->query("SELECT * FROM content WHERE contentcat_id = 'CC005' AND content_id !='CO015' ORDER BY content_order ASC");
                while($hdt = $hdb->fetch_array()){
            ?>
                <div class="leftbox">
                    <div class="hisleftimg">
                    <a href="assets/images/content/<?= $hdt['content_image']; ?>" data-fancybox data-caption="Single image">><img src="assets/images/content/<?= $hdt['content_image']; ?>" alt="<?= $hdt['content_judul']; ?>" title="<?= $hdt['content_judul']; ?>"></a> 
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
            <?php } ?>    
        </div>
    </div>
</div>