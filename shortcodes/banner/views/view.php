<?php if (!defined('FW')) die('Forbidden'); ?>

<?php  if($atts['e25_image_upload']['gadget'] == 'image') { ?>

	<div id="banner_wrapper" style="
		background-image: url(<?php echo $atts['e25_image_upload']['image']['image']['data']['icon'] ?>);
	">
		<div class="fw-container">
			<div class="row">
				<div class="fw-col-lg-7">
					<div id="banner-content">
						<?php if( $atts['e25_image_upload']['image']['content'] ): ?>
							<h2 style="
								<?php 
									if($atts['e25_content_color']) { 
										echo 'color:'.$atts['e25_content_color'].';';
									}
									if($atts['e25_content_shadow']){
										echo 'text-shadow: 0 2px 3px rgba(0,0,0,0.5);';
									}
								?>
							"><?php echo $atts['e25_image_upload']['image']['content'] ?></h2>
						<?php endif; ?>

						<?php foreach ( $atts['e25_image_upload']['image']['boxes'] as $box ) : ?>
							<?php if( $box ): ?>
								<div class="content-box" style="
									<?php 										
										if($atts['e25_box_border_color']) { 
											echo 'border-color:'.$atts['e25_box_border_color'].';';
										}
									?>
								">
									<a href="#" style="
										<?php
											if($atts['e25_box_text_color']) { 
												echo 'color:'.$atts['e25_box_text_color'].';';
											}
										?>
									"><?php echo $box; ?></a>
									
									<style type="text/css">
										#banner_wrapper #banner-content > div.content-box:hover {
										    background-color: <?php echo $atts['e25_box_hover_background_color']; ?>;
										    border-color: <?php echo $atts['e25_box_hover_background_color']; ?> !important;
										}
										#banner_wrapper #banner-content > div.content-box:hover a {
											color: <?php echo $atts['e25_box_hover_text_color']; ?> !important;
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

<?php } else if ($atts['e25_image_upload']['gadget'] == 'slider') { ?>

	<div id="slider_wrapper">
		<?php foreach ( $atts['e25_image_upload']['slider']['group'] as $slider ) : ?>
			<div style="
		  		background-image: url(<?php echo $slider['image']['data']['icon'] ?>);
		  	">	
		  		<div class="fw-container">		  			
			  		<div class="slider-content">
			  			<div class="row">
							<div class="fw-col-lg-7">
								<?php if( $slider['content'] ): ?>
									<h2 style="
										<?php 
											if($atts['e25_content_color']) { 
												echo 'color:'.$atts['e25_content_color'].';';
											}
											if($atts['e25_content_shadow']){
												echo 'text-shadow: 0 2px 3px rgba(0,0,0,0.5);';
											}
										?>
									"><?php echo $slider['content'] ?></h2>
								<?php endif; ?>

								<?php foreach ( $slider['boxes'] as $single ) : ?>
									<?php if( $single ): ?>
										<div class="content-box" style="
											<?php 
												if($atts['e25_box_text_color']) { 
													echo 'color:'.$atts['e25_box_text_color'].';';
												}
												if($atts['e25_box_border_color']) { 
													echo 'border-color:'.$atts['e25_box_border_color'].';';
												}
											?>
										">
											<a href="#" style="
												<?php
													if($atts['e25_box_text_color']) { 
														echo 'color:'.$atts['e25_box_text_color'].';';
													}
												?>
											"><?php echo $single; ?></a>
											
											<style type="text/css">
												#slider_wrapper .slider-content .content-box:hover {
												    background-color: <?php echo $atts['e25_box_hover_background_color']; ?>;
												    border-color: <?php echo $atts['e25_box_hover_background_color']; ?> !important;
												}
												#slider_wrapper .slider-content .content-box:hover a {
													color: <?php echo $atts['e25_box_hover_text_color']; ?> !important;
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
	  	<?php endforeach; ?>
	</div>

	<script type="text/javascript">
		/**
		 * slider_wrapper
		 */
		jQuery(document).ready(function() {
			jQuery('#slider_wrapper').slick({
				arrows: <?php echo ($atts['arrow']) ? 'true' : 'false'; ?>,
				dots: <?php echo ($atts['dots']) ? 'true' : 'false'; ?>,
				fade: <?php echo ($atts['fade']) ? 'true' : 'false'; ?>,
				infinite: <?php echo ($atts['infinite']) ? 'true' : 'false'; ?>,
				autoplay: <?php echo ($atts['autoplay']) ? 'true' : 'false'; ?>,
				autoplaySpeed: <?php echo ($atts['autoplay_speed']) ? $atts['autoplay_speed'] : '0'; ?>,
				speed: <?php echo ($atts['speed']) ? $atts['speed'] : '0'; ?>,
				pauseOnHover: <?php echo ($atts['pause_on_hover']) ? 'true' : 'false'; ?>,
				touchMove: <?php echo ($atts['touch_move']) ? 'true' : 'false'; ?>,
			});
		});
	</script>

<?php } else { ?>
	<video autoplay muted loop id="video_wrapper">
	  	<source src="<?php echo $atts['e25_image_upload']['video']['video'] ?>" type="video/mp4">
	  	Your browser does not support HTML5 video.
	</video>
	<div id="video_container">
		<div class="fw-container">
			<div class="row">
				<div class="fw-col-lg-7">
					<div class="video-content">
						<?php if( $atts['e25_image_upload']['video']['content'] ): ?>
							<h2 style="
								<?php 
									if($atts['e25_content_color']) { 
										echo 'color:'.$atts['e25_content_color'].';';
									}
									if($atts['e25_content_shadow']){
										echo 'text-shadow: 0 2px 3px rgba(0,0,0,0.5);';
									}
								?>
							"><?php echo $atts['e25_image_upload']['video']['content'] ?></h2>
						<?php endif; ?>

						<?php foreach ( $atts['e25_image_upload']['video']['boxes'] as $box ) : ?>
							<?php if( $box ): ?>
								<div class="content-box" style="
									<?php 										
										if($atts['e25_box_border_color']) { 
											echo 'border-color:'.$atts['e25_box_border_color'].';';
										}
									?>
								">
									<a href="#" style="
										<?php
											if($atts['e25_box_text_color']) {
												echo 'color:'.$atts['e25_box_text_color'].';';
											}
										?>
									"><?php echo $box; ?></a>
									
									<style type="text/css">
										#banner_wrapper #banner-content > div.content-box:hover {
										    background-color: <?php echo $atts['e25_box_hover_background_color']; ?>;
										    border-color: <?php echo $atts['e25_box_hover_background_color']; ?> !important;
										}
										#banner_wrapper #banner-content > div.content-box:hover a {
											color: <?php echo $atts['e25_box_hover_text_color']; ?> !important;
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
// echo print_r($atts['arrow']);
// echo '</pre>';
?>

