<?php

get_header(); ?>

<div id="main-column">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

get_template_part( 'template-parts/content', 'full' );

endwhile; else : echo "Nothing here."; endif; ?>

</div> <!-- #main-column -->

<?php

get_sidebar();

get_footer();

?>
