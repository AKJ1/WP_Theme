<section class="introduction">
	<?php <?php if ( have_posts('introduction') ) : while ( have_posts() ) : the_post(); ?>
	<div class="container">
		<div class="background">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="heading">
			
		</div>
		<div class="text">
			
		</div>
	</div>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?> ?>
</section>