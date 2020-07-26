<?php /* Template Name: Without Header & Title */ ?>
<?php get_header(); ?>
		
				<div class="content-area">
			<div class="main-content">
				
				<!--<h2>COMPANY PROFILE</h2>-->
				<p>
				
		
		<?php while(have_posts()):the_post();?>
								<!--<h1><?php //the_title(); ?></h1>-->
								<?php //the_post_thumbnail(); ?>
								<?php the_content(); ?>
															
								<?php 
									if ( comments_open() || get_comments_number() ) {
										comments_template();
									}
						
								?>
							<?php endwhile; ?>


				</p>

			
			</div>
		</div>
		
<?php get_footer(); ?>