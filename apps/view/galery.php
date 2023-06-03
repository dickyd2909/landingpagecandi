<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div id="bggal">
    <div id="bogal">
        <div class="galtit">
            Gallery
        </div>
        <?php
            $gdb = $koneksi->query("SELECT * FROM content WHERE contentcat_id ='CC003'");
            $gdt = $gdb->fetch_array(); 
        ?>
        <div class="galdesc">
            <?= $gdt['content_judul']; ?>
        </div>
        <div class="galbox clearfix">
            <?php
                $no = 1;
                $gldb = $koneksi->query("SELECT * FROM galery ORDER BY galery_order ASC");
                while($gldt = $gldb->fetch_array()){
            ?>
                <div class="galleft">
                    <div class="galimg">
                        <a href="assets/images/galery/<?= $gldt['galery_image']; ?>" data-fancybox="gallery"><img src="assets/images/galery/<?= $gldt['galery_image']; ?>" alt="<?= $gldt['galery_nama']; ?>" title="<?= $gldt['galery_nama']; ?>"></a>
                    </div>
                </div>
            <?php } ?>    
        </div>
    </div>
</div>