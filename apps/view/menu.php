<div id="bgtop">
	<div id="botop" class="clearfix">
		<div class="topleft">
			<div class="topleftbox clearfix">
				<div class="topleftimg">
					<?php
						$db = $koneksi->query("SELECT * FROM content WHERE contentcat_id = 'CC004'");
						$dt = $db->fetch_array();
					?>
					<img src="assets/images/content/<?= $dt['content_image']; ?>" title="<?= $dt['content_judul'];?>" alt="<?= $dt['content_judul'];?>">
				</div>
				<div class="toplefttit"> 
					<h1> <?= $dt['content_judul']; ?> </h1>
				</div>
			</div>
		</div>
		<div class="topmid">
			<div class="topmidlink">
				<ul>
					<?php
						$mdb = $koneksi->query("SELECT * FROM menu WHERE menu_status = 'Aktif' ORDER BY menu_order ASC");
						while($mdt = $mdb->fetch_array()){
					?>
						<?php if($mdt['menu_id'] == 'MN001'){ ?>
							<li><a href="#" class="active"><?= $mdt['menu_nama']; ?></a></li>
						<?php }else{ ?>
							<li><a href="#"><?= $mdt['menu_nama']; ?></a></li>
						<?php } ?>	
					<?php } ?>
				</ul>
			</div>
		</div>
		<div class="topright">
			<div class="toprightbutton">
				<a href="#" class="btnreg">Daftar</a>
				<a href="#" class="btnlogin">Masuk</a>
			</div>
		</div>	
	</div>
</div>