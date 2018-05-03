<?php

get_header();
 
while (have_posts()){
	the_post();?>
<?php wp_login_form( $args ); ?>
<?php }	

 get_footer();

 ?>