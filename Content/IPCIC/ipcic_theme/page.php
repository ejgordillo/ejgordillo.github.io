<?php get_header();?>
<div class="page">
  <section class="heading heading__page p-relative t-center">
    <h1 class="title"><?php the_title()?></h1>
    <div class="heading__background p-absolute full-height full-width" style="background: linear-gradient(rgba(10, 38, 107, 0.9), rgba(10, 38, 107, 0.9)), url('<?php echo get_stylesheet_directory_uri();?>/assets/img/location.jpg'); background-size: cover;"></div>
  </section>
  <section class="page__content w-50 e-center">
    <?php while (have_posts()) : the_post()?>
      <?php the_content(); ?>                  
    <?php endwhile; ?>
  </section>
 </div>
<!-- content close -->

<?php get_footer(); ?>