<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
  <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CDN CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Font-awesome -->
    <script src="https://use.fontawesome.com/cecebce7cd.js"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class( 'site' ); ?>>
<div id="page" class="site container-fluid">
	<a class="sr-only sr-only-focusable" href="#content">
	  <?php _e( 'Skip to content', 'massmvacom' ); ?>
	</a>


  <?php 
    /**
     * If there is a masthead above the nav use this
     * in this theme, the top-nav is nested inside the masthead
     */
    get_template_part( 'template-parts/header/header', 'masthead' );
    
    
  ?>
<main id="main" class="site-main" role="main">