<?php
	$adb = $koneksi->query("SELECT * FROM content WHERE contentcat_id = 'CC002' AND content_status = 'Aktif' ORDER BY content_id ASC LIMIT 1");
	$adt = $adb->fetch_array();
?>
<div id="bgabout">
	<div id="boabout" class="clearfix">
		<div class="aboutleft">
			<div class="aboutleftimg">
				<img src="assets/images/content/<?= $adt['content_image']; ?>" alt="<?= $adt['content_judul']; ?>" title="<?= $adt['content_judul']; ?>">
			</div>
		</div>
		<div class="aboutright">
			<div class="aboutrighttit">
				<?= $adt['content_judul']; ?>
			</div>
			<div class="aboutrightdesc">
				<?= $adt['content_desc']; ?>
			</div>
		</div>
	</div>
</div>