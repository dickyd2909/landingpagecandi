<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php
		include "../config/database.php";
		include "../libs/core.php";
	?>
	<?php site('logsvisitor');?>
	<?php
		$mtdb = $koneksi->query("SELECT * FROM metadata");
		$mtdt = $mtdb->fetch_array();
	?>
	<meta name="description" content="<?= $mtdt['metadata_description']; ?>"> 
	<meta name="keywords" content="<?= $mtdt['metadata_keyword']; ?>">
	<meta charset="UTF-8">
	<meta name="generator" content="cms-phpnative">
	<meta name="robots" content="index, follow">
	<meta name="developer" content="dickydarmawan">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="author" content="Maliniart Olshop">
	<meta name="copyright" content="<?= $mtdt['metadata_copyright']; ?>">
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Maliniart Olshop" />
	<meta property="og:description" content="<?= $mtdt['metadata_description']; ?>" />
	<meta property="og:url" content="<?= $mtdt['metadata_url']; ?>" />
	<meta property="og:site_name" content="candi muara takus" />
	<meta property="article:tag" content="candi muara takus riau">
    <link href="cms/assets/images/logo/<?= $mtdt['metadata_gambar']; ?>" rel="shortcut icon" type="image/x-icon" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="libs/sweetalert2.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&family=Quattrocento+Sans:wght@400;700&display=swap" rel="stylesheet">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" integrity="sha512-UJfAaOlIRtdR+0P6C3KUoTDAxVTuy3lnSXLyLKlHYJlcSU8Juge/mjeaxDNMlw9LgeIotgz5FP8eUQPhX1q10A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Candi Muara Takus</title>
</head>
<Body>
    <?php site('menu');?>
	<div id="bgjumbo">
		<div class="jumboimg">
            <?php
                $jdb = $koneksi->query("SELECT * FROM content WHERE contentcat_id = 'CC008' ");
                $jdt = $jdb->fetch_array();
            ?>
			<img src="assets/images/content/<?= $jdt['content_image']; ?>" alt="<?= $jdt['content_judul']; ?>" title="<?= $jdt['content_judul']; ?>">
		</div>
	</div>
    <?php
        $adb = $koneksi->query("SELECT * FROM content WHERE contentcat_id = 'CC002' AND content_status = 'Aktif' ORDER BY content_id ASC LIMIT 1");
        $adt = $adb->fetch_array();
    ?>
    <div id="bgboutpage">
        <div class="sharebtnbox">
            <div class="sharebtn">
                <a href=""><img src="assets/images/fb2.png" alt=""></a>
            </div>
            <div class="sharebtn2">
                <a href=""><img src="assets/images/ig2.png" alt=""></a>
            </div>
            <div class="sharebtn3">
                <a href=""><img src="assets/images/tw2.png" alt=""></a>
            </div>
            <div class="sharebtn4">
                <a href=""><img src="assets/images/lk2.png" alt=""></a>
            </div>
        </div>
        
        <div id="boboutpage">
            <div class="boutpagespan">
                About Us
            </div>
            <div class="boutpagetit">
                <?= $adt['content_judul']; ?>
            </div>
            <span class="bouttgl"><?= $adt['updated']; ?> <i class="fa-solid fa-star"></i></span>
            <div class="boutpageimg">
                <img src="assets/images/content/<?= $adt['content_image']; ?>" alt="<?= $adt['content_judul']; ?>" title="<?= $adt['content_judul']; ?>">
            </div>
           <div class="boutpagedesc">
                <?= $adt['content_desc']; ?>
           </div>
        </div>
    </div>
	<?php site('contactus');?>
    <?php site('footer');?>
</Body>
</html>