<head> 
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="theme-color" content="#3498db">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link type="text/plain" rel="author" href="<?php echo get_template_directory_uri(); ?>/humans.txt">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/icono-apple.png">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/png">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <?php wp_head(); ?>
  </head> 