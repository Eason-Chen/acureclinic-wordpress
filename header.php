<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Ropa+Sans">
	 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body>
	<!-- header start -->
	<header class="clearfix">
		<section class="container">
			<div class="row">
				<div class="col-md-4 col-sm-2">
					<div class="logo"></div>
				</div>
				<nav class="col-md-8 col-sm-10 col-xs-12 nav-collapse clearfix">
					<?php
						$args = array(
							'theme_location' => 'primary'
						);
					?>
					<?php wp_nav_menu( $args ); ?>
				</nav>
			</div>
		</section>
	</header><!-- header end -->