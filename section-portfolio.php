
<div>PORTFOLIO section</div>

<?php global $business; 

if(have_posts()):

if(get_posts(array('post_type' => 'portfolio'))){ ?>

<!-- PORTFOLIO -->
		<section class="section-portfolio clearfix" id="portfolio">			
		
			<div class="portfolioContainer clearfix">

			<?php query_posts('post_type=portfolio'); ?>

			<?php while(have_posts()):the_post(); ?>				

				<div class="h-product col-sm-6 col-md-4 col-lg-3">
					
					<a href="<?php the_permalink(); ?>" class="u-url">
						<?php the_post_thumbnail(); ?>
					</a>
				</div>

				<?php endwhile; ?>

				<?php wp_reset_query(); ?>				
				
			</div>

		</section>
		<!-- END PORTFOLIO -->

<?php } ?>

<?php endif; ?>