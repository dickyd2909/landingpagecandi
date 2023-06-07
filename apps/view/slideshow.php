<div id="bgslideshow">
	<script src="assets/js/jssor.js"></script>
	<script src="assets/js/jssor.slider.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			var _CaptionTransitions = [];
			_CaptionTransitions["L"] = { $Duration: 900, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
			_CaptionTransitions["R"] = { $Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
			_CaptionTransitions["T"] = { $Duration: 900, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
			_CaptionTransitions["B"] = { $Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
			_CaptionTransitions["ZMF|10"] = { $Duration: 900, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
			_CaptionTransitions["RTT|10"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
			_CaptionTransitions["RTT|2"] = { $Duration: 900, $Zoom: 3, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5} };
			_CaptionTransitions["RTTL|BR"] = { $Duration: 900, x: -0.6, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} };
			_CaptionTransitions["CLIP|LR"] = { $Duration: 900, $Clip: 15, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
			_CaptionTransitions["MCLIP|L"] = { $Duration: 900, $Clip: 1, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
			_CaptionTransitions["MCLIP|R"] = { $Duration: 900, $Clip: 2, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
			
			var options = {
				$FillMode: 2, 
				$AutoPlay: true,
				$AutoPlayInterval: 4000,
				$PauseOnHover: 1,			
				$ArrowKeyNavigation: true,
				$SlideEasing: $JssorEasing$.$EaseOutQuint,
				$SlideDuration: 800,
				$MinDragOffsetToSlide: 20,
				//$SlideWidth: 600,
				//$SlideHeight: 300,
				$SlideSpacing: 0,
				$DisplayPieces: 1,
				$ParkingPosition: 0,
				$UISearchMode: 1,
				$PlayOrientation: 1,
				$DragOrientation: 1,
				
				$CaptionSliderOptions: {
					$Class: $JssorCaptionSlider$,
					$CaptionTransitions: _CaptionTransitions,
					$PlayInMode: 1,
					$PlayOutMode: 3
				},
				
				$BulletNavigatorOptions: {
					$Class: $JssorBulletNavigator$,
					$ChanceToShow: 2,
					$AutoCenter: 1,
					$Steps: 1,
					$Lanes: 1,
					$SpacingX: 8,
					$SpacingY: 8,
					$Orientation: 1
				},
				
				$ArrowNavigatorOptions: {
					$Class: $JssorArrowNavigator$,
					$ChanceToShow: 1,
					$AutoCenter: 2,
					$Steps: 1
				}
			};
			
			var jssor_slider1 = new $JssorSlider$("slider1_container", options);
			
			//responsive code begin
			function ScaleSlider() {
				var bodyWidth = document.body.clientWidth;
				if (bodyWidth)
				jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
				else
				window.setTimeout(ScaleSlider, 30);
			}
			
			ScaleSlider();
			
			if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
				$(window).bind('resize', ScaleSlider);
			}
			//responsive code end
		});
	</script>
	<div id="slider1_container" style="position:relative;margin:0 auto;top:0px;left:0px;width:1920px;height:800px;overflow:hidden;">
		<div u="loading" style="position:absolute;top:0px;left:0px;">
			<div style="filter:alpha(opacity=70);opacity:0.7;position:absolute;display:block;top:0px;left:0px;width:100%;height:100%;">
			</div>
			<div style="position:absolute;display:block;background:url(assets/images/processing.gif) no-repeat center center;top:0px;left:0px;width:100%;height:100%;">
			</div>
		</div>
		<div u="slides" style="cursor:move;position:absolute;left:0px;top:0px;width:1920px;height:800px;overflow:hidden;">
			<?php
				$slidb = mysqli_query($koneksi, "SELECT * FROM slideshow ORDER BY slideshow_order ASC");
				while($slidt = mysqli_fetch_array($slidb)) {
			?>	
				<div>
					<img u="image" class="imgbright" src="assets/images/slideshow/<?php echo $slidt['slideshow_image'];?>" alt="<?php echo $slidt['slideshow_judul'];?>" title="<?php echo $slidt['slideshow_judul'];?>">
						<div style="position:absolute;width:50%;height:auto;top:340px;padding:0;text-align:center;line-height:auto;text-transform:uppercase;font-weight:700;font-size:60px;font-family:'Poppins', sans-serif;color:#fff;left:50%;transform:translate(-50%, -10%);">
							<?php echo $slidt['slideshow_judul'];?>
						</div> 
				</div>
			<?php } ?>
		</div>
		
		<style>
			.jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {background:url(assets/images/b17.png) no-repeat;overflow:hidden;cursor:pointer;}
			.jssorb21 div { background-position:-5px -5px;}
			.jssorb21 div:hover, .jssorb21 .av:hover { background-position:-35px -5px;}
			.jssorb21 .av { background-position:-65px -5px;}
			.jssorb21 .dn, .jssorb21 .dn:hover { background-position:-95px -5px;}
		</style>
		<div u="navigator" class="jssorb21" style="position:absolute;bottom:120px;left:6px;">
			<div u="prototype" style="position:absolute;width:19px;height:19px;text-align:center;line-height:19px;color:white;font-size:12px;"></div>
		</div>
		<style>
			.jssora21l, .jssora21r, .jssora21ldn, .jssora21rdn {position:absolute;cursor:pointer;display:block;background:url(assets/images/a17.png) center center no-repeat;overflow:hidden;}
			.jssora21l { background-position:-3px -33px;}
			.jssora21r { background-position:-63px -33px;}
			.jssora21l:hover { background-position:-123px -33px;}
			.jssora21r:hover { background-position:-183px -33px;}
			.jssora21ldn { background-position:-243px -33px;}
			.jssora21rdn { background-position:-303px -33px;}
		</style>
		<span u="arrowleft" class="jssora21l" style="width:55px;height:55px;top:123px;left:8px;"></span>
		<span u="arrowright" class="jssora21r" style="width:55px;height:55px;top:123px;right:8px"></span>
		<section class="section2">
			<div class="wave wave1"></div>
			<div class="wave wave2"></div>
			<div class="wave wave3"></div>
			<div class="wave wave4"></div>
		</section>
	</div>
</div>