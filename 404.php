<?php

/*
 * 404.php
 *
 * It's what happens when you try to do things yourself.
 */

get_header();
?>

<!-- Currently in #page-middle -->
<div id="main-column">
  <div id="secondary-menu-area">
    <?php
    wp_nav_menu( array(
      'theme_location' => 'secondary-menu',
      'container_class' => 'secondary-menu'
    ));
    ?>
  </div> <!-- #secondary-menu-area -->

  <main id="page-content">
    <h2>404 - Page Not Found</h2>
    <p>We're sorry, but this page either no longer exists or has been moved.</p>
  </main> <!-- #page-content -->
</div> <!-- #main-column -->

<?php
get_footer();
?>
