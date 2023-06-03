<div id="bgcan">
    <div id="bocan" class="clearfix">
        <div class="canleft">
            <div class="canbtn">
            <?php
                $no = 1;
                $db = $koneksi->query("SELECT * FROM content WHERE contentcat_id ='CC006'");
                while($dt = $db->fetch_array()){
            ?>
                <?php if($no == '1'){ ?>
                    <button class="btncandi tablink active" onclick="openCity(event, 'candi<?= $no++; ?>')"><?= $dt['content_judul']; ?></button>
                <?php }else{ ?>
                    <button class="btncandi tablink" onclick="openCity(event, 'candi<?= $no++; ?>')"><?= $dt['content_judul']; ?></button>
                <?php } ?>
            <?php } ?>    
            </div>
        </div>
        <div class="canright">
            <?php
                $no = 1;
                $db = $koneksi->query("SELECT * FROM content WHERE contentcat_id ='CC006'");
                while($dt = $db->fetch_array()){
            ?>
                <?php if($no == '1'){ ?>
                    <div class="canrightbox city clearfix" id="candi<?= $no++; ?>" style="display:block">
                <?php }else{ ?>
                    <div class="canrightbox city clearfix" id="candi<?= $no++; ?>" style="display:none">
                <?php } ?>
                        <div class="canrighttext">
                        <p><?= $dt['content_desc']; ?></p>
                        </div>
                        <div class="canrightimg">
                            <img src="assets/images/content/<?= $dt['content_image']; ?>" alt="<?= $dt['content_judul']; ?>" title="<?= $dt['content_judul']; ?>">
                        </div>
                    </div>
            <?php } ?>
        </div>
    </div>
</div>

<script>
    function openCity(evt, cityName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", ""); 
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>