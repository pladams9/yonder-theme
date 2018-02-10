<?php

get_header(); ?>

<div id="secondary-menu">
</div> <!-- secondary-menu -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="post">
    <div class="title">
      <h2><?php the_title(); ?></h2>
    </div>
    <div class="content">
      <?php the_content(); ?>
    </div>
  </div>

<?php
endwhile;
else :
  echo "Nothing here.";
endif;

get_footer();

?>
