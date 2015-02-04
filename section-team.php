<section class="team">
	<?php <?php if ( have_posts('team') ) : while ( have_posts('team') ) : the_post(); ?>
		<div class="container">
			<div class="portrait">
				
			</div>
			<div class="member-name">
				<h2>
					<?php the_title(); ?>
				</h2>
			</div>
			<div class="member-info">
				<p>
					<?php the_content(); ?>
				</p>
			</div>
		</div>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<div>no members ._. Fix yo stuff</div>
	<?php endif; ?> ?>
</section>