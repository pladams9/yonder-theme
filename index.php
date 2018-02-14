<?php

/**
 * index.php
 *
 * This is the least specific template; the fallback for all pages if no
 * matching template can be found. It also serves as the blueprint for new
 * templates.
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

    get_template_part( 'template-parts/content', 'excerpt' );

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
