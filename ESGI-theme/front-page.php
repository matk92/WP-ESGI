<?php get_header(); ?>

<main id="site-content">
  <div class="hero">
    <div class="container">
      <h1 class="top-title"><?php echo get_theme_mod('top_title', 'A really professional structure for all your events!'); ?></h1>
      <img class="top-image" src="<?php echo get_theme_mod('top_image', get_template_directory_uri() . '/src/img/top-image.png'); ?>"/>
    </div>
  </div>

  <?php
    get_template_part('template-parts/about-us');
    get_template_part('template-parts/services');
    get_template_part('template-parts/partners');
    ?>
</main>

<?php get_footer(); ?>
