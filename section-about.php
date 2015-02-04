<div>About Section</div>

<?php if(have_posts()): ?>

	
	<?php if(get_posts(array('post_type' => 'about')) || get_posts(array('post_type' => 'skill'))){ ?>

	<section class="section-about col-sm-12" id="about">

			<div class="container">
				
				<header class="heading-wrap">
				
					<h2 class="section-head"><?php _e('about'); ?></h2> <!-- end section-head -->

				</header> <!-- end heading-wrap -->



				<?php if(get_posts(array('post_type' => 'about'))){ ?>

					<div class="job-wrap">

					<?php query_posts('post_type=about'); ?>

					<?php while(have_posts()):the_post(); ?>

							<div class="h-resume col-sm-6 col-md-3">
					
								<h3 class="p-experience"><?php the_title(); ?></h3>

								<div class="p-desc">
								<?php the_post_thumbnail(); ?>

									post:	<?php the_content(); ?>
								</div> <!-- end p-desc -->
							
							</div> <!-- end h-resume -->

					<?php endwhile; ?>

					<?php wp_reset_query(); ?>

					</div> <!-- end job-wrap -->

				<?php } ?>



			
	</section>

	<?php } ?>


<?php endif; ?>

<!-- END ABOUT -->
