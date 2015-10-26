<?php
/*
Template Name: Contact Template
 */
	get_header();
?>

<!-- contact start -->
<section class="container">
	<div class="row">
		<div class="col-md-5 col-sm-6 col-xs-12">
			<h2>Find Us Here</h2>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.867004578546!2d174.76599370000002!3d-36.845661099999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d47fbc886f43f%3A0x9413d43d75a7c2c1!2s505%2F87-93+Queen+St%2C+Auckland%2C+1010!5e0!3m2!1sen!2snz!4v1443471872662" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			<h2>Company Information</h2>
			<?php
			if (have_posts()) :
				while (have_posts()) : the_post();
			?>
			<h1><?php the_content(); ?></h1>
			<?php
				endwhile;
			else :
				echo '<p>No content found</p>';
			endif;
			?>
		</div>
		<div class="com-md-7 col-sm-6 col-xs-12">
			<h2>Contact Us</h2>
			<?php
				if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }
			?>
		</div>
	</div>
</section>
<!-- contact end -->

<?php
	get_footer();
?>