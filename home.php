<?php

/*
 * home.php
 *
 * This template is used to show the main blog page, whether on the Front Page
 * or a secondary Posts page. Shows full content.
 *
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

    <?php
    /*
    * The Loop
    */
    if ( have_posts() ) : while ( have_posts() ) : the_post();

    get_template_part( 'template-parts/content', 'full' );

    endwhile; else : echo "Nothing here."; endif;
    ?>

    <div class="pagination-nav">
    <?php posts_nav_link(); ?>
    </div>
  </main> <!-- #page-content -->
</div> <!-- #main-column -->

<?php
get_sidebar();
get_footer();
?>
