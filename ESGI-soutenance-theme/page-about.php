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
        <?php for ($i = 1; $i <= 4; $i++): ?>
            <div class="team-item">
                <img src="<?php echo get_theme_mod("team_image_$i", get_template_directory_uri() . "/src/img/team$i.jpg"); ?>" alt="Team Member <?php echo $i; ?>">
                <div class="role"><?php echo get_theme_mod("about_us_role_$i", "Role $i"); ?></div>
                <div class="phone"><?php echo get_theme_mod("about_us_phone_$i", "+33 1 53 31 25 23"); ?></div>
                <div class="email"><?php echo get_theme_mod("about_us_email_$i", "email$i@example.com"); ?></div>
            </div>
        <?php endfor; ?>
    </div>
</div>
<?php get_footer(); ?>
