
<div>PORTFOLIO section</div>
<section class="portfolio">
	<?php

	if(have_posts()): if(get_posts(array('post_type' => 'portfolio'))){ ?>

	<!-- PORTFOLIO -->
				<div class="portfolioContainer clearfix">

				<?php query_posts('post_type=portfolio'); ?>

				<?php while(have_posts()):the_post(); ?>				

					<div class="h-product col-xs-12 col-sm-6 col-md-4 col-lg-3">
						<div class="image">
							<a href="<?php the_permalink(); ?>" class="u-url">
								<?php the_post_thumbnail(); ?>
							</a>
						</div>
						<div class="project-info">
							<h2>
								<?php the_title(); ?>
							</h2>
							<p>
								<?php the_content(); ?>
							</p>

						</div>
					</div>

					<?php endwhile; ?>

					<?php wp_reset_query(); ?>				
					
				</div>

		<?php } ?>
	<?php endif; ?>
</section>