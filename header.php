<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Helios by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="<?php echo get_template_directory_uri(); ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/ie8.css" /><![endif]-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	
<div class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header" style="background-iamage:url('/wp-content/uploads/2017/11/everyone.jpg<?php //echo get_post_meta(get_the_ID(), "header_img_url", true ); ?>');">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="/" id="logo">Indian American Scholarship Foundation</a></h1>
								<?php if (is_front_page()): ?>
    								<hr />
    								<p>Honoring Excellence in Education</p>
    							<?php endif; ?>
							</header>
							<!--footer>
								<a href="#banner" class="button circled scrolly">Start</a>
							</footer-->
						</div>
	<?php include "nav.php"; ?>
				</div><!-- #header -->