<?php
/*
Template Name: Services
*/
get_header();
get_template_part('template-parts/services');
?>
    <div class="corp-parties">
        <h2>Corp. Parties</h2>
        <p><?php echo get_theme_mod('service_corp'); ?></p>
        <img src="<?php echo get_theme_mod('service_corp_image'); ?>" alt="Corp. Parties">
    </div>
</div>

<?php get_footer(); ?>
