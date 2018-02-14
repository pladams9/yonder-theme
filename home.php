<?php

/**
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
  <?php get_template_part( 'template-parts/nav/menu', 'secondary' ); ?>

  <main id="page-content">

    <?php
    /*
    * The Loop
    */
    if ( have_posts() ) : while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', 'full' );

    endwhile;
    ?>
      <div class="pagination-nav">
        <?php posts_nav_link(); ?>
      </div>
    <?php
    else : echo "Nothing here."; endif;
    ?>

  </main> <!-- #page-content -->
</div> <!-- #main-column -->

<?php
get_sidebar();
get_footer();
?>
