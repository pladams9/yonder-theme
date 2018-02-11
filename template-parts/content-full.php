<div <?php post_class(); ?>>
  <div class="title">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
