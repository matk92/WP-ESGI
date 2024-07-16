<article class="identityCard">
    <?= get_custom_logo() ?>
    <h1><?= get_bloginfo('name') ?></h1>
    <h2><?= get_bloginfo('description') ?></h2>
    <footer>
        <ul>
            <?php if (get_theme_mod('url_twitter')) : ?>
            <li>
                <a href="<?= get_theme_mod('url_twitter') ?>"><?= esgi_getIcon('twitter') ?></a>
            </li>
            <?php endif; ?>
            <?php if (get_theme_mod('url_facebook')) : ?>
            <li>
                <a href="<?= get_theme_mod('url_facebook') ?>"><?= esgi_getIcon('facebook') ?></a>
            </li>
            <?php endif; ?>
            <?php if (get_theme_mod('url_google')) : ?>
            <li>
                <a href="<?= get_theme_mod('url_google') ?>"><?= esgi_getIcon('google') ?></a>
            </li>
            <?php endif; ?>
            <?php if (get_theme_mod('url_linkedin')) : ?>
            <li>
                <a href="<?= get_theme_mod('url_linkedin') ?>"><?= esgi_getIcon('linkedin') ?></a>
            </li>
            <?php endif; ?>
        </ul>
    </footer>
</article>