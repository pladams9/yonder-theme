<?php
/**
 * content-excerpt.php
 *
 * This is a template part. It displays excerpts of posts.
 */
?>

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
  <div class="excerpt">
    <?php the_excerpt(); ?>
    <p><a href="<?php the_permalink(); ?>">Continue reading ></a></p>
  </div>
</div>
