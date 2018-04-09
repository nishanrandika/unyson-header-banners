<?php if (!defined('FW')) die('Forbidden'); ?>

<?php  if($atts['image_upload']['gadget'] == 'image') { ?>

	<div id="banner_wrapper" style="
		background-image: url(<?php echo $atts['image_upload']['image']['image']['data']['icon'] ?>);
	">
		<div class="fw-container">
			<div class="row">
				<div class="fw-col-lg-7">
					<div id="banner-content">
						<?php if( $atts['image_upload']['image']['content'] ): ?>
							<div style="
								<?php 
									if($atts['content_color']) { 
										echo 'color:'.$atts['content_color'].';';
									}
									if($atts['content_shadow']){
										echo 'text-shadow: 0 2px 3px rgba(0,0,0,0.5);';
									}
								?>
							"><?php echo $atts['image_upload']['image']['content'] ?></div>
						<?php endif; ?>

						<?php foreach ( $atts['image_upload']['image']['boxes'] as $box ) : ?>
							<?php if( $box ): ?>
								<div class="content-box" style="
									<?php 										
										if($atts['box_border_color']) { 
											echo 'border-color:'.$atts['box_border_color'].';';
										}
									?>
								">
									<a href="#" style="
										<?php
											if($atts['box_text_color']) { 
												echo 'color:'.$atts['box_text_color'].';';
											}
										?>
									"><?php echo $box; ?></a>
									
									<style type="text/css">
										#banner_wrapper #banner-content > div.content-box:hover {
										    background-color: <?php echo $atts['box_hover_background_color']; ?>;
										    border-color: <?php echo $atts['box_hover_background_color']; ?> !important;
										}
										#banner_wrapper #banner-content > div.content-box:hover a {
											color: <?php echo $atts['box_hover_text_color']; ?> !important;
										}
									</style>

								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } else if ($atts['image_upload']['gadget'] == 'slider') { 
		$count = 0;
	?>

	<div id="slider_wrapper">
		<?php foreach ( $atts['image_upload']['slider']['group'] as $slider ) : ?>			
			<?php if($slider['choose']['actions'] == 'image') : ?>
				<div id="sl-<?php echo $count;  ?>" data-sl="image" style="
			  		background-image: url(<?php echo $slider['choose']['image']['image']['data']['icon'] ?>);
			  	">
			<?php else : ?>
				<div class="video-slick" id="sl-<?php echo $count; ?>" data-sl="video">
					<video <?php echo ($slider['choose']['video']['loop']) ? 'loop' : ''; ?> id="theSlickVideo">
					  	<source src="<?php echo $slider['choose']['video']['video'] ?>" type="video/mp4">
					  	Your browser does not support HTML5 video.
					</video>
			<?php endif; ?>	
			  		<div class="fw-container">		  			
				  		<div class="slider-content">
				  			<div class="row">
								<div class="fw-col-lg-7">
									<?php if( $slider['content'] ): ?>
										<div style="
											<?php 
												if($atts['content_color']) { 
													echo 'color:'.$atts['content_color'].';';
												}
												if($atts['content_shadow']){
													echo 'text-shadow: 0 2px 3px rgba(0,0,0,0.5);';
												}
											?>
										"><?php echo $slider['content'] ?></div>
									<?php endif; ?>

									<?php foreach ( $slider['boxes'] as $single ) : ?>
										<?php if( $single ): ?>
											<div class="content-box" style="
												<?php 
													if($atts['box_text_color']) { 
														echo 'color:'.$atts['box_text_color'].';';
													}
													if($atts['box_border_color']) { 
														echo 'border-color:'.$atts['box_border_color'].';';
													}
												?>
											">
												<a href="#" style="
													<?php
														if($atts['box_text_color']) { 
															echo 'color:'.$atts['box_text_color'].';';
														}
													?>
												"><?php echo $single; ?></a>
												
												<style type="text/css">
													#slider_wrapper .slider-content .content-box:hover {
													    background-color: <?php echo $atts['box_hover_background_color']; ?>;
													    border-color: <?php echo $atts['box_hover_background_color']; ?> !important;
													}
													#slider_wrapper .slider-content .content-box:hover a {
														color: <?php echo $atts['box_hover_text_color']; ?> !important;
													}
												</style>
											</div>
										<?php endif; ?>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
					</div>
				</div>			
			<?php $count++; ?>
	  	<?php endforeach; ?>
	</div>

	<script type="text/javascript">
		/**
		 * slider_wrapper
		 */
		jQuery(document).ready(function() {	

			// Fires after first initialization.
			jQuery('#slider_wrapper').on('init', function(){
				var sl_element = jQuery('[id="sl-0').attr('data-sl');
				if (sl_element == 'video') {
					theSlickVideo.play();
			  	}
            });	

			// Slick slider
			jQuery('#slider_wrapper').slick({
				arrows: <?php echo ($atts['arrow']) ? 'true' : 'false'; ?>,
				dots: <?php echo ($atts['dots']) ? 'true' : 'false'; ?>,
				<?php echo ($atts['slideshow_transition'] == 'fade') ? 'fade: true' : ''; ?>,
				infinite: <?php echo ($atts['infinite']) ? 'true' : 'false'; ?>,
				autoplay: <?php echo ($atts['autoplay']) ? 'true' : 'false'; ?>,
				autoplaySpeed: <?php echo ($atts['autoplay_speed']) ? $atts['autoplay_speed'] : '0'; ?>,
				speed: <?php echo ($atts['speed']) ? $atts['speed'] : '0'; ?>,
				pauseOnHover: <?php echo ($atts['pause_on_hover']) ? 'true' : 'false'; ?>,
				touchMove: <?php echo ($atts['touch_move']) ? 'true' : 'false'; ?>,
			});			

			// Fires after slide change
			jQuery('#slider_wrapper').on('afterChange', function(event, slick, currentSlide){
				var sl_element = jQuery('[id="sl-'+ currentSlide +'"]').attr('data-sl');
			  	if (sl_element == 'video') {
					jQuery('#slider_wrapper').slick('slickPause');
					theSlickVideo.play();
					
					// time function, start video from begining
					<?php if ($atts['duration']) : ?>
						setTimeout(function() {
			            	theSlickVideo.pause();			            	
			            	jQuery('#slider_wrapper').slick('slickPlay');			            	
			            }, <?php echo ($atts['duration']); ?>);
					<?php endif; ?>

					<?php if ($atts['begining']) : ?>
	            		theSlickVideo.currentTime = 0;
	            	<?php endif; ?>
			  	}
            });

			document.getElementById('theSlickVideo').addEventListener('ended',myHandler,false);

			function myHandler(e) {
				jQuery('#slider_wrapper').slick('slickPlay');
			}
		});
	</script>

<?php } else { ?>
	<video autoplay muted loop id="video_wrapper">
	  	<source src="<?php echo $atts['image_upload']['video']['video'] ?>" type="video/mp4">
	  	Your browser does not support HTML5 video.
	</video>
	<div id="video_container">
		<div class="fw-container">
			<div class="row">
				<div class="fw-col-lg-7">
					<div class="video-content">
						<?php if( $atts['image_upload']['video']['content'] ): ?>
							<div style="
								<?php 
									if($atts['content_color']) { 
										echo 'color:'.$atts['content_color'].';';
									}
									if($atts['content_shadow']){
										echo 'text-shadow: 0 2px 3px rgba(0,0,0,0.5);';
									}
								?>
							"><?php echo $atts['image_upload']['video']['content'] ?></div>
						<?php endif; ?>

						<?php foreach ( $atts['image_upload']['video']['boxes'] as $box ) : ?>
							<?php if( $box ): ?>
								<div class="content-box" style="
									<?php 										
										if($atts['box_border_color']) { 
											echo 'border-color:'.$atts['box_border_color'].';';
										}
									?>
								">
									<a href="#" style="
										<?php
											if($atts['box_text_color']) {
												echo 'color:'.$atts['box_text_color'].';';
											}
										?>
									"><?php echo $box; ?></a>
									
									<style type="text/css">
										#banner_wrapper #banner-content > div.content-box:hover {
										    background-color: <?php echo $atts['box_hover_background_color']; ?>;
										    border-color: <?php echo $atts['box_hover_background_color']; ?> !important;
										}
										#banner_wrapper #banner-content > div.content-box:hover a {
											color: <?php echo $atts['box_hover_text_color']; ?> !important;
										}
									</style>

								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php
// echo '<pre>';
// echo print_r($atts['image_upload']['slider']['group'][1]['choose']);
// echo print_r($atts['image_upload']['slider']['group'][1]['choose']['video']['video']);
// echo '</pre>';
?>

