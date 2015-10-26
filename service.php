<?php
/*
Template Name: Service Template
 */
	get_header();
?>

	<!-- service content start -->
	<section class="container">
		<h2>Our Service</h2>
		<?php
			$service = new WP_Query('cat=5');

			if ($service->have_posts()) :
				while ($service->have_posts()) : $service->the_post();
		?>
			<div class="row service_content">
				<!-- service artcle start -->
				<article>
					<div class="col-md-4 col-sm-4 col-xs-6">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="col-md-8 col-sm-8 col-xs-6">
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
					</div>
				</article>
				<!-- service artcle end -->
			</div>
		<?php
				endwhile;
			else :
				echo '<p>No content found</p>';
			endif;
				wp_reset_postdata();
		?>
	</section>
	<!-- service content end -->

<?php
	get_footer();
?>