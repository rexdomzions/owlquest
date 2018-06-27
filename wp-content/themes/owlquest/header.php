<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WiroSableng
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- bootstrap core css -->
	<link href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- font-awesome -->
	<link href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Raleway font -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <?php if ( ot_get_option( 'Favicon_wirosableng' ) ) { ?>
      <link rel="shortcut icon" href="<?php echo ot_get_option( 'Favicon_wirosableng' ); ?>" />
      <?php } ?>
      <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?>>
     <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wirosableng' ); ?></a>
      <!-- HEADER -->
      <header class="site-header" role="banner">
       <div class="container">
        <?php if ( ot_get_option( 'Header_logo_wirosableng' ) ) { ?>
            <img src="<?php echo esc_url( ot_get_option( 'Header_logo_wirosableng' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        <?php }   ?>
        <h2><?php echo bloginfo('description') ?></h2>
        <div class="navbar-wrapper">
         <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>           
        </div><!-- navbar-header -->
        <?php

        wp_nav_menu( array(
          'menu'           	=> '',
          'theme_location'    => 'primary',
          'menu_id'			=> 'navbartop',
          'container'         => 'nav',
          'container_class'   => 'collapse navbar-collapse',
          'items_wrap' 		=> 	my_nav_wrap(),
          'container_id'      => 'bs-example-navbar-collapse-1',
          'menu_class'        => 'nav navbar-nav navbar-left',
          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
          'walker'            => new wp_bootstrap_navwalker())
        );
        ?>
      </div><!-- navbar -->
    </div><!-- navbar-wrapper -->
  </div><!-- container -->
  		</header><!-- header -->