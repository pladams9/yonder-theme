<html>
<head>
  <title> <?php bloginfo('name'); wp_title(); ?> </title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page">
  <div id="header">
    <div id="header-content">
      <h1> <?php bloginfo('name'); ?> </h1>
      <h2> <?php wp_title(''); ?> </h2>
    </div> <!-- #header-content -->
    <div id="primary-menu">
      <?php wp_nav_menu(); ?>
    </div> <!-- #primary-menu -->
  </div>
  <div id="main-area">
    <div id="secondary-menu">
      <?php wp_nav_menu(); ?>
    </div> <!-- #secondary-menu -->
