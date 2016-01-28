<!DOCTYPE html>
<html lang="en-GB">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title><?php wp_title('|', true, 'right'); ?></title>
  <!--  Meta description will be added by Yoast WordPress SEO plugin -->
  
  <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="HandheldFriendly" content="True"> <!-- For older dumb phones. Palm and Blackberries -->
  <meta name="MobileOptimized" content="320"> <!-- Older "Windows Mobile" Phones -->
  <meta name="apple-mobile-web-app-capable" content="yes"><!-- iOS meta tag defines whether the web application should run in full-screen mode -->	
	<meta name="format-detection" content="telephone=no"><!-- Prevent iOS to change the style of a telephone number -->
  
  <!-- Font Families -->
  <?php the_field('font_families', 'option'); ?>


  <?php wp_head(); ?>

  
  <!-- Respond.js -->
  <!--[if lt IE 9]>
  <script src="<?php bloginfo('template_url'); ?>/dist/js/ie8/html5shiv-respond.min.js"></script>
  <![endif]-->

</head>

<body <?php body_class(); ?>>
<!--[if lt IE 9]>
  <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<noscript>
For full functionality of this site it is necessary to enable JavaScript.
Here are the <a href="http://www.enable-javascript.com/" target="_blank">
instructions how to enable JavaScript in your web browser</a>.
</noscript>

<div class="external-container u-cf">
<div class="container u-cf">
  

<?php get_template_part('partials/logo-and-main-navigation'); ?>