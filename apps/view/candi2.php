<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js" integrity="sha512-achKCfKcYJg0u0J7UDJZbtrffUwtTLQMFSn28bDJ1Xl9DWkl/6VDT3LMfVTo09V51hmnjrrOTbtg4rEgg0QArA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<div id="bgcan2">
    <div class="can2tit">Mengenal Lebih Dalam </div>
    <div id="bocan2" class="clearfix">
        <div class="can2subtit">Candi Muara Takus</div>
        <div class="img-slider">
            <?php
                $no = 1;
                $db = $koneksi->query("SELECT * FROM content WHERE contentcat_id ='CC006' AND content_id != 'CO009'");
                while($dt = $db->fetch_array()){
            ?>
                <?php if($no == '1'){ ?>
                    <div class="slide active">
                <?php }else{ ?>
                    <div class="slide">
                <?php } ?>        
                        <img src="assets/images/content/<?= $dt['content_image']; ?>" alt="<?= $dt['content_judul']; ?>" title="<?= $dt['content_judul']; ?>">
                        <div class="info">
                            <h2><?= $dt['content_judul']; ?></h2>
                            <p><?= $dt['content_desc']; ?></p>
                        </div>
                    </div>
            <?php $no++;} ?>    
            <div class="navigation">
            <?php
                $no = 1;
                $db = $koneksi->query("SELECT * FROM content WHERE contentcat_id ='CC006' AND content_id != 'CO009'");
                while($dt = $db->fetch_array()){
            ?>
                <?php if($no == '1') {?>
                    <div class="btn active"></div>
                <?php }else{ ?>
                    <div class="btn"></div>
                <?php } ?> 
            <?php $no++;} ?>
            </div>
        </div>
        <div class="can2subtit">Pada Zaman Dulu</div>
    </div>
</div>

<script type="text/javascript">
    var slides = document.querySelectorAll('.slide');
    var btns =document.querySelectorAll('.btn');
    let currentSlide = 1;

    var manualNav = function(manual){
        slides.forEach((slide) => {
            slide.classList.remove('active');
            btns.forEach((btn) => {
                btn.classList.remove('active');
            })
        })
        slides[manual].classList.add('active');
        btns[manual].classList.add('active');
    }

    btns.forEach((btn, i) => {
        btn.addEventListener("click", () => {
            manualNav(i);
            currentSlide = i;
        });
    });

    var repeat = function(activeClass){
        let active = document.getElementsByClassName('active');
        let i = 1;

        var repeater = () => {
            setTimeout(function(){
                [...active].forEach((activeSlide) => {
                    activeSlide.classList.remove('active');
                });

               slides[i].classList.add('active');
               btns[i].classList.add('active');
               i++;

               if(slides.length == i){
                i = 0;
               }
               if(i >= slides.length){
                return;
               }
               repeater();
            },10000);
        }
        repeater();
    }
    repeat();
</script>