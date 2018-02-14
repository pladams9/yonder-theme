<?php
/*
 * sidebar.php
 *
 * This file just defines the sidebar block which contains the sidebar widget
 * area. This should always be placed in #page-middle.
 *
 */
?>

<!-- Currently in #page-middle, below #page-content -->
<aside id="page-sidebar">
  <?php dynamic_sidebar( 'sidebar-widgets' ); ?>
</aside> <!-- #page-sidebar -->
