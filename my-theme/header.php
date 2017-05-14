<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

  <?php get_template_part('template-parts/head'); ?>

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