<?php get_header(); ?>
		<div class="slider-area">
			<div class="">
				<div class="main-slider">
					<!--<div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
					  <div class="carousel-inner">
						<div class="carousel-item active">
						  <img src="<?php echo get_template_directory_uri(); ?>/images/slides/slide1.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
						  <img src="<?php echo get_template_directory_uri(); ?>/images/slides/slide2.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
						  <img src="<?php echo get_template_directory_uri(); ?>/images/slides/slide3.jpg" class="d-block w-100" alt="...">
						</div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
					</div>-->
					<?php echo do_shortcode('[rev_slider alias="main-slider-mcwl"]'); ?>
				</div>
			</div>
		</div>
<?php get_footer(); ?>