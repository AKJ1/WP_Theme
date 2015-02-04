<?php get_header(); ?>


<?php get_header('blog'); ?>


<section class="blog-container" role="main">
		
		<div class="container">
				
			<?php if(have_posts()): ?>

			<!-- BLOG -->

			<?php if(is_active_sidebar('sidebar')){ ?>
			
			<div class="col-sm-12 col-md-10 col-md-offset-1">

			<?php }else{ ?>

			<div class="col-sm-9">

			<?php } ?>

				<?php while(have_posts()):the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('h-entry'); ?>>					
				
						<figure>
							
							<?php the_post_thumbnail("100%"); ?>
							
						</figure>

						<h3 class="p-name">
							<a href="<?php the_permalink(); ?>" class="u-url" title="description"><?php the_title(); ?></a>
						</h3>		

						<div class="p-summary">
							 <?php the_excerpt(); ?>
						</div> <!-- end p-summary -->

						<a href="<?php the_permalink(); ?>" class="btn u-url"><?php _e('Read More','business-one'); ?></a>	

					</article>

				<?php endwhile; ?>

				<div class="business-pagenavi">
					<?php business_one_pagenavi(); ?>
				</div> <!-- end business-pagenavi -->					

			</div>
			<!-- END BLOG -->

			<?php endif; ?>


			<?php get_sidebar(); ?>


		</div> <!-- end container -->

</section> <!-- end blog-container -->



<?php get_footer('home'); ?>

<?php get_footer(); ?>