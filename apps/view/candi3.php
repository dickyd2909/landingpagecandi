
<div id="bgcan2">
    <div class="carousel-tit">Mengenal Lebih Dalam</div>   
    <div class="carousel">
        <?php
            $no = 1;
            $db = $koneksi->query("SELECT * FROM content WHERE contentcat_id ='CC006' AND content_id != 'CO009'");
            while($dt = $db->fetch_array()){
        ?>
            <a href="#<?= $no++; ?>" class="carousel-item">
                <img src="assets/images/content/<?= $dt['content_image']; ?>" alt="<?= $dt['content_judul']; ?>" title="<?= $dt['content_judul']; ?>">
                <div class="carousel-info">
                    <div class="carousel-info-tit">
                        <?= $dt['content_judul']; ?>
                    </div>
                    <div class="carousel-info-desc">
                        <?= $dt['content_desc']; ?>
                    </div>
                </div>
            </a>
        <?php } ?>
    </div>
</div>      
<script type="text/javascript">
    $(document).ready(function(){
        $('.carousel').carousel({
            indicators : true,
        });
    });
</script>