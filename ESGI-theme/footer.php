<footer id="site-footer" class="col-md-6 offset-3">
    <div class="container">
        ©<?= date('Y') ?> Edouard Sombié
        <?php if (has_nav_menu('footer_menu')) : ?>
            <nav id="footer-navigation" class="footer-menu" role="navigation">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu',
                        'menu_id'        => 'footer-menu',
                    ));
                ?>
            </nav>
        <?php endif; ?>

        <?php if (is_active_sidebar('footer-widget-area')) : ?>
            <div class="footer-widgets">
                <?php dynamic_sidebar('footer-widget-area'); ?>
            </div>
        <?php endif; ?>

        <?php if (get_theme_mod('has_footer_search', false)) : ?>
            <div class="footer-search">
                <?php get_search_form(); ?>
            </div>
        <?php endif; ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>