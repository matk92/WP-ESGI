<?php
/*
Template Name: About Us
*/
get_header();
get_template_part('template-parts/about-us');
?>
<div class="our-team">
    <h1>Our Team</h1>
    <div class="team-container">
        <div class="team-item">
            <img src="<?php echo get_theme_mod('team_image_1'); ?>">
            <div class="role"><?php echo get_theme_mod('about_us_role_1'); ?></div>
            <div class="phone"><?php echo get_theme_mod('about_us_phone_1'); ?></div>
            <div class="email"><?php echo get_theme_mod('about_us_email_1'); ?></div>
        </div>
        <div class="team-item">
            <img src="<?php echo get_theme_mod('team_image_2'); ?>">
            <div class="role"><?php echo get_theme_mod('about_us_role_2'); ?></div>
            <div class="phone"><?php echo get_theme_mod('about_us_phone_2'); ?></div>
            <div class="email"><?php echo get_theme_mod('about_us_email_2'); ?></div>
        </div>
        <div class="team-item">
            <img src="<?php echo get_theme_mod('team_image_3'); ?>">
            <div class="role"><?php echo get_theme_mod('about_us_role_3'); ?></div>
            <div class="phone"><?php echo get_theme_mod('about_us_phone_3'); ?></div>
            <div class="email"><?php echo get_theme_mod('about_us_email_3'); ?></div>
        </div>
        <div class="team-item">
            <img src="<?php echo get_theme_mod('team_image_4'); ?>">
            <div class="role"><?php echo get_theme_mod('about_us_role_4'); ?></div>
            <div class="phone"><?php echo get_theme_mod('about_us_phone_4'); ?></div>
            <div class="email"><?php echo get_theme_mod('about_us_email_4'); ?></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
