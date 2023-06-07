<div id="bgswip">
    <div class="swiptit">
        <?php
            $gdb = $koneksi->query("SELECT * FROM content WHERE contentcat_id ='CC003'");
            $gdt = $gdb->fetch_array(); 
        ?>
        <?= $gdt['content_judul']; ?>
    </div>
    <section id="section">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php
                    $gdb = $koneksi->query("SELECT * FROM galery");
                    while($gdt = $gdb->fetch_array()){
                ?>
                    <div class="swiper-slide"><a href="assets/images/galery/<?= $gdt['galery_image']; ?>" data-fancybox="gallery"><img src="assets/images/galery/<?= $gdt['galery_image']; ?>" alt="<?= $gdt['galery_nama']; ?>" title="<?= $gdt['galery_nama']; ?>"></a> </div>
                <?php } ?>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            
            <div class="pagination_">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
</div>
<script>
    Fancybox.bind('[data-fancybox="gallery"]', {
    // Your custom options
    });
</script>