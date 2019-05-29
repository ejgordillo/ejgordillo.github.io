<?php 
/**
 * Template Name: Home
 */
get_header();?>
  <?php get_template_part( 'template-parts/landing', get_post_format() ); ?>
<?php get_footer(); ?>