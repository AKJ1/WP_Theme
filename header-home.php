<body <?php body_class(); ?>>

<div class="page-loader">
	<img src="<?php echo get_template_directory_uri(); ?>/img/loader.gif" alt="<?php _e('ajax loader','business-one'); ?>">
</div> <!-- end page-loader -->

			<div class="mobile-justify">
				
				<i class="fa fa-align-justify"></i>

			</div> <!-- end mobile-justify -->


		
			<div class="mobile-menu">

				<?php wp_nav_menu(array(
					'theme_location' => 'homepage-menu',
					'menu_class' => 'nav',
					'depth' => 2,
					'fallback_cb' => 'busines_one_menufb'
				)); ?>


			</div> <!-- end mobile-menu -->
