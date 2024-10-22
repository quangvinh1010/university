<?php
get_header();
while (have_posts()) :
	the_post();
?>

	<div class="page-banner">

		<div class="page-banner__bg-image" style="background-image: url(<?php

																		if (has_post_thumbnail())
																			echo get_the_post_thumbnail_url();
																		else
																			echo get_theme_file_uri("images/ocean.jpg")
																		?>)"></div>
		<!-- <div class="page-banner__bg-image" style="background-image: url(images/ocean.jpg)"></div> -->
		<div class="page-banner__content container container--narrow">
			<h1 class="page-banner__title"><?php the_title(); ?></h1>
			<div class="page-banner__intro">
				<p><?php the_excerpt(); ?></p>
			</div>
		</div>
	</div>

	<div class="container container--narrow page-section">

		<div class="generic-content">
			<?php the_content(); ?>
		</div>
	</div>





<?php
endwhile;
get_footer();
?>