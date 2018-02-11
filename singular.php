<?php

get_header(); ?>

<div id="main-column">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="post">
    <div class="title">
      <h2><?php the_title(); ?></h2>
    </div>
    <div class="meta">
      <div class="author">
        <?php the_author(); ?>
      </div>
      <div class="category">
        <?php the_category(); ?>
      </div>
      <div class="tags">
        <?php the_tags(); ?>
      </div>
    </div>
    <div class="content">
      <?php the_content(); ?>
    </div>
  </div>

<?php endwhile; else : echo "Nothing here."; endif; ?>

</div> <!-- #main-column -->

<?php

get_sidebar();

get_footer();

?>
