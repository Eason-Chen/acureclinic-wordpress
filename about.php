<?php
/*
Template Name: About Template
 */
	get_header();
?>

	<!-- about content start -->
	<section class="container">
		<h2>About Us</h2>
		<div class="row">
			<?php
				$intro = new WP_Query('cat=4');

				if ($intro->have_posts()) :
					while ($intro->have_posts()) : $intro->the_post();
			?>
				<!-- intro grid start -->
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="intro_grid clearfix">
					<h4><?php the_title(); ?></h4>
					<?php the_post_thumbnail(); ?>
					<?php the_content(); ?>
					</div>
				</div><!-- intro grid end -->
			<?php
					endwhile;
				else :
					echo '<p>No content found</p>';
				endif;
					wp_reset_postdata();
			?>
		</div>
	</section>
	<!-- about content end -->

<?php
	get_footer();
?>