<?php 
/**
 * Template Name: Contacto
 */
get_header(); ?>


  <?php while (have_posts()) : the_post()?>
    <?php the_content(); ?>                  
  <?php endwhile; ?>
 
<!-- content close -->
<?php get_footer(); ?>