<?php
/*
 * Template Name: 3D Ball Abstract 
 */
get_header('v3'); ?>

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post();       
  the_content(); // displays whatever you wrote in the wordpress editor
  endwhile; endif; //ends the loop
 ?>

<?php get_footer('v3'); ?>