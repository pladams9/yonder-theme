<?php

get_header(); ?>

<div id="main-column">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

get_template_part( 'template-parts/content', 'full' );

?>

    <div id="comments" class="comments">
      <?php
      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;
      ?>
    </div>

<?php endwhile; else : echo "Nothing here."; endif; ?>

</div> <!-- #main-column -->

<?php

get_sidebar();

get_footer();

?>
