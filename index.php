<?php
	get_header();
?>

	<!-- slider start -->
	<?php masterslider(1); ?>
	<!-- slider end -->


	<!-- links start -->
	<div class="links">
		<section class="container">
			<div class="row">
				<!-- links grid start -->
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="links_grid clearfix">
						<div class="links_imgs">
							<img src="<?php echo get_template_directory_uri() ?>/imgs/grid-img1.png" alt="About Us">
						</div>
						<div class="links_art">
							<h3>About Us</h3>
							<p>Need More info ?</p>
							<div class="links_more"><a href="<?php echo home_url(); ?>/about">View More</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="links_grid clearfix">
						<div class="links_imgs">
							<img src="<?php echo get_template_directory_uri() ?>/imgs/grid-img2.png" alt="Our Service">
						</div>
						<div class="links_art">
							<h3>Our Services</h3>
							<p>Need More info ?</p>
							<div class="links_more"><a href="<?php echo home_url(); ?>/service">View More</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="links_grid clearfix">
						<div class="links_imgs">
							<img src="<?php echo get_template_directory_uri() ?>/imgs/grid-img3.png" alt="Contact Us">
						</div>
						<div class="links_art">
							<h3>Contact Us</h3>
							<p>Need More info ?</p>
							<div class="links_more"><a href="<?php echo home_url(); ?>/contact">View More</a></div>
						</div>
					</div>
				</div><!-- links grid end -->
			</div>
		</section>
	</div><!-- links end -->

	<!-- intro start -->
	<section class="container">
		<div class="row">
			<?php
				$intro = new WP_Query('cat=1');

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
	</section><!-- intro end -->

<?php
	get_footer();
?>