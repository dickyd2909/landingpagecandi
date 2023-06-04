<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div id="bggalery">
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
    <div id="bogalery">
        <div id="drag">
            <div id="spin">
                <?php
                    $no = 1;
                    $gldb = $koneksi->query("SELECT * FROM galery ORDER BY galery_order ASC");
                    while($gldt = $gldb->fetch_array()){
                ?>
                    <img src="assets/images/galery/<?= $gldt['galery_image']; ?>" alt="<?= $gldt['galery_nama']; ?>" title="<?= $gldt['galery_nama']; ?>" id="img">
                <?php } ?>    
            </div>
            <div id="ground"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var radius      = 340;
    var autoRotate  = true;
    var rotateSpeed = -60;
    var imgWidth    = 190;
    var imgHeight   = 230;

    setTimeout(init, 1000);

    var odrag = document.getElementById('drag');
    var ospin = document.getElementById('spin');
    var aImg = ospin.getElementsByTagName('img');
    var aEle = [...aImg];

    ospin.style.width =imgWidth + "px";
    ospin.style.height=imgHeight + "px";

    var ground =document.getElementById('ground');
    ground.style.width = radius * 3 + "px";
    ground.style.height= radius * 3 + "px";


    function init(delayTime){
        for(let i = 0; i < aEle.length; i++){
            aEle[i].style.transform = "rotateY(" + (i * (360 / aEle.length)) + "deg) translateZ(" + radius + "px)";
            aEle[i].style.transition = "transform 1s";
            aEle[i].style.transitionDelay = delayTime || (aEle.length-i) / 4 + "s";
        }
    }

    function applyTransform(obj){
        if(tY > 180) tY = 180;
        if(tY < 0) tY = 0;

        obj.style.transform = "rotateX(" + (-tY) + "deg) rotateY(" + (tX) + "deg)";
    };

    function playSpin(yes){
        ospin.style.animationPlayState = (yes ? 'running' : 'pause');
    };

    var sX, sY, nX, nY, desX = 0, desY = 0, tX = 0,tY =10;
    
    if(autoRotate){
        var animationName = (rotateSpeed>0 ? 'spin' : 'spinRevert');
        ospin.style.animation = `${animationName} ${Math.abs(rotateSpeed)} s infinite linear`;
    };

    document.onpointerdown = function(e){
        clearInterval(odrag.timer);
        e = e || window.event;
        var sX = e.clientX,
            sY = e.clientY;
    

        this.onpointermove = function(e){
            e = e || window.event;
            var nX = e.clientX, nY = e.clientY;

            desX = nX - sX;
            desY = nY - sY;
            tX += desX * 0.1;
            tY += desY * 0.1;

            applyTransform(odrag);
            sX = nX;
            sY = nY;
        };

        this.onpointerup = function(e){
            odrag.timer =setInterval(function(){
                desX *= 0.95;
                desY *= 0.95;
                tX += desX * 0.1;
                tY += desY * 0.1; 

                applyTransform(odrag);

                playSpin(false);

                if(Math.abs(desX) < 0.5 && Math.abs(desY) < 0.5){
                    clearInterval(odrag.timer);
                    playSpin(true);
                }
            }, 17);

            this.onpointermove = this.onpointerup = null;
        };

        return false;
    };

</script>