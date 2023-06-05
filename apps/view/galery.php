<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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