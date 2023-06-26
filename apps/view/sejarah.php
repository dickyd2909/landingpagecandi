<div id="bghis">
    <div id="bohis">
    <div class="galtit">
            Candi
        </div>
        <div class="galdesc">
            <?php
                $tdb = $koneksi->query("SELECT * FROM content WHERE content_id = 'CO015'");
                $tdt = $tdb->fetch_array();
            ?>
            <?= $tdt['content_judul']; ?>
        </div>
        <div id="hisbox" class="clearfix">
            <div class="popup">
                <div class="top-bar">
                    <p class="image-name"></p>
                    <p class="image-desc"><p>
                </div>
                <img src="" class="large-image">
                <div class="boclose-btn">
                    <span class="close-btn"><img src="assets/images/arrownew.png" alt=""></span>
                    <span class="close-btn-text">Kembali</span>
                </div>
                
                <span class="index">01</span>
                <button class="arrow-btn left-arrow"><img src="assets/images/prev.png" alt=""></button>
                <button class="arrow-btn right-arrow"><img src="assets/images/next.png" alt=""></button>
            </div>  
            <?php
                $hdb = $koneksi->query("SELECT * FROM content WHERE contentcat_id = 'CC005' AND content_id !='CO015' ORDER BY content_order ASC");
                while($hdt = $hdb->fetch_array()){
            ?>
                <div class="leftbox">
                    <div class="hisleftimg">
                    <a>
                        <img src="assets/images/content/<?= $hdt['content_image']; ?>" alt="<?= $hdt['content_judul']; ?>" title="<?= $hdt['content_judul']; ?>" class="image">
                    </a> 
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
<script>
    const images = [...document.querySelectorAll('.image')];

    const popup =   document.querySelector('.popup');
    const closeBtn = document.querySelector('.close-btn');
    const imageName = document.querySelector('.image-name');
    const imageDesc = document.querySelector('.image-desc');
    const largeImage = document.querySelector('.large-image');
    const imageIndex = document.querySelector('.index');
    const rightArrow = document.querySelector('.right-arrow');
    const leftArrow = document.querySelector('.left-arrow');
    const closeBtnText =document.querySelector('.close-btn-text');

    let index = 0;
    
    images.forEach((item, i) => {
        item.addEventListener('click', () => {
           updateImage(i, images[i].getAttribute('src'), images[i].getAttribute('title'));
           popup.classList.toggle('active'); 
        });
    });

    const updateImage = (i, e, n) =>{
        let path = `${e}`;
        largeImage.src = path;
        imageName.innerHTML = n;
        imageIndex.innerHTML = `${i+1}/${images.length}`;
        index = i;
    }

    closeBtn.addEventListener('click', () =>{
        popup.classList.toggle('active');
    });
    closeBtnText.addEventListener('click', () =>{
        popup.classList.toggle('active');
    });

    leftArrow.addEventListener('click', () => {
        if(index > 0){
            updateImage(index - 1, images[index - 1].getAttribute('src'), images[index - 1].getAttribute('title'));
                
        }
    });

    rightArrow.addEventListener('click', () => {
        if(index < images.length - 1){
            updateImage(index + 1, images[index + 1].getAttribute('src'), images[index + 1].getAttribute('title'));   
        }
    });
</script>