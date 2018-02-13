<html>
<head>
  <title> <?php bloginfo('name'); wp_title(); ?> </title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page-wrapper">

  <header id="page-header">

    <div id="header-content">
      <h1> <?php bloginfo('name'); ?> </h1>
      <h2> <?php wp_title(''); ?> </h2>
    </div> <!-- #header-content -->

    <div id="primary-menu-area">
      <?php
      wp_nav_menu( array(
        'theme_location' => 'primary-menu',
        'container_class' => 'primary-menu'
      ));
      ?>
    </div> <!-- #primary-menu-area -->

  </header> <!-- #page-header -->

  <div id="page-middle">

<!-- #page-middle closes in footer.php -->
<!-- #page-wrapper closes in footer.php -->
<!-- body closes in footer.php -->
<!-- html closes in footer.php -->
