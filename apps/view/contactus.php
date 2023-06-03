<div id="bggal">
    <div id="bogal">
        <div class="galtit">
            Contact
        </div>
        <?php
            $gdb = $koneksi->query("SELECT * FROM content WHERE contentcat_id ='CC007'");
            $gdt = $gdb->fetch_array(); 
        ?>
        <div class="galdesc">
            <?= $gdt['content_judul']; ?>
        </div>
    </div>
</div>
<div class="contactusbox">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.749704575039!2d100.63939477442383!3d0.3360265996606766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d534de1cfa81d7%3A0x915328680a25f7f5!2sMuara%20Takus%20Temple!5e0!3m2!1sen!2sid!4v1685814963958!5m2!1sen!2sid" width="1920" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>