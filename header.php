<?php

/**
 * header.php
 *
 * This is the header for every page on the site. It included <head>, which in
 * turn includes wp_head(). It also opens up <body> with the top header area
 * and the two top navigation menus. Lastly it opens the #page-middle section.
 * Everything that is left open here is closed in footer.php.
 *
 */

?>

<html>
<head>
  <title> <?php bloginfo('name'); wp_title(); ?> </title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page-wrapper">

  <header id="page-header">
    
    <div id="header-content" style="background-image: url('<?php header_image(); ?>');">
      <!-- <img alt="" src="<?php //header_image(); ?>"> -->
      <h1 class="site-name" style="color: <?php header_textcolor(); ?>"><?php bloginfo('name'); ?></h1>
      <h2 class="site-tagline" style="color: <?php header_textcolor(); ?>"><?php bloginfo('description'); ?></h2>
    </div> <!-- #header-content -->

  <?php get_template_part( 'template-parts/nav/menu', 'primary' ); ?>

  </header> <!-- #page-header -->

  <div id="page-middle">

<!-- #page-middle closes in footer.php -->
<!-- #page-wrapper closes in footer.php -->
<!-- body closes in footer.php -->
<!-- html closes in footer.php -->
