<h3>Comments</h3>

<?php

comment_form();

wp_list_comments( array( 'reverse_top_level' => true ) );

paginate_comments_links();

?>
