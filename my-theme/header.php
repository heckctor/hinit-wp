<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
  <head> 
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="theme-color" content="#3498db">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link type="text/plain" rel="author" href="<?php echo get_template_directory_uri(); ?>/humans.txt">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/icono-apple.png">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/png">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
   <section id="wrapper">
   		<!-- header -->
		<header class="header clear" role="banner">

				<!-- logo -->
				<div class="logo">
					<a href="<?php echo home_url(); ?>">
						<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logotipo.png" alt="Logo" class="logo-img">
					</a>
				</div>
				<!-- /logo -->

				<!-- nav -->
				<nav class="nav" role="navigation">
					<?php hinitWp_nav(); ?>
				</nav>
				<!-- /nav -->

		</header>
		<!-- /header -->
      <div class="container">