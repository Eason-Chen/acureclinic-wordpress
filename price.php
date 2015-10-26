<?php
/*
Template Name: Price Template
 */
	get_header();
?>

	<!-- price items start -->
	<section class="container">
		<h2>Price</h2>
		<h5>With ACC Treatement</h5>
		<div class="row">
			<?php
				$acc = new WP_Query('cat=6');

				if ($acc->have_posts()) :
					while ($acc->have_posts()) : $acc->the_post();
			?>
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="price_items">
						<h6><?php the_title(); ?></h6>
						<?php the_post_thumbnail(); ?>
						<p><?php the_content(); ?></p>
					</div>
				</div>
			<?php
					endwhile;
				else :
					echo '<p>No content found</p>';
				endif;
					wp_reset_postdata();
			?>
		</div>

		<h5>Non-Acc Treatment</h5>
		<div class="row">
			<?php
				$noAcc = new WP_Query('cat=7');

				if ($noAcc->have_posts()) :
					while ($noAcc->have_posts()) : $noAcc->the_post();
			?>
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="price_items">
						<h6><?php the_title(); ?></h6>
						<?php the_post_thumbnail(); ?>
						<p><?php the_content(); ?></p>
					</div>
				</div>
			<?php
					endwhile;
				else :
					echo '<p>No content found</p>';
				endif;
					wp_reset_postdata();
			?>
		</div>

		<h5>Special treatment</h5>
		<div class="row">
			<?php
				$special = new WP_Query('cat=8');

				if ($special->have_posts()) :
					while ($special->have_posts()) : $special->the_post();
			?>
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="price_items">
						<h6><?php the_title(); ?></h6>
						<?php the_post_thumbnail(); ?>
						<p><?php the_content(); ?></p>
					</div>
				</div>
			<?php
					endwhile;
				else :
					echo '<p>No content found</p>';
				endif;
					wp_reset_postdata();
			?>
		</div>
	</section>
	<!-- price items end -->

<?php
	get_footer();
?>