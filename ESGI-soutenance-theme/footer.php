<footer class="site-footer">
  <div class="container">
    <div class="footer-left">
      <h1 class="footer-logo">ESGI.</h1>
      <p>2022 Figma Template by ESGI</p>
    </div>
    <div class="footer-right">
      <div class="contact-info">
        <h2>Manager</h2>
        <p>+33 1 53 31 25 23</p>
        <p>info@esgi.com</p>
      </div>
      <div class="contact-info">
        <h2>CEO</h2>
        <p>+33 1 53 31 25 25</p>
        <p>ceo@company.com</p>
      </div>
          <ul>
            <?php if (get_theme_mod('url_twitter')) : ?>
            <li>
              <a href="<?= get_theme_mod('url_twitter') ?>"
                ><?= esgi_getIcon('twitter') ?></a
              >
            </li>
            <?php endif; ?>
            <?php if (get_theme_mod('url_facebook')) : ?>
            <li>
              <a href="<?= get_theme_mod('url_facebook') ?>"
                ><?= esgi_getIcon('facebook') ?></a
              >
            </li>
            <?php endif; ?>
            <?php if (get_theme_mod('url_google')) : ?>
            <li>
              <a href="<?= get_theme_mod('url_google') ?>"
                ><?= esgi_getIcon('google') ?></a
              >
            </li>
            <?php endif; ?>
            <?php if (get_theme_mod('url_linkedin')) : ?>
            <li>
              <a href="<?= get_theme_mod('url_linkedin') ?>"
                ><?= esgi_getIcon('linkedin') ?></a
              >
            </li>
            <?php endif; ?>
          </ul>
        </div>
    </div>
</footer>
