<?php 
/*
Template Name: Test Page
*/

get_header();

//write the code here
if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif;

?>

<!--<label for="">School</label> <br>-->
<!--<input type="text" class="con-school">-->


<?php
get_footer();
?>






