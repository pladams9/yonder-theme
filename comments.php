<div id="comments" class="comments">
  <h3>Comments</h3>

<?php

if ( comments_open() ) :
  comment_form();
endif;

wp_list_comments( array( 'reverse_top_level' => true ) );

paginate_comments_links();

?>

</div>
