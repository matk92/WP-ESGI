<div class="our-partners">
    <h1>Our Partners</h1>
    <div class="partners-container">
        <?php for ($i = 1; $i <= 6; $i++): ?>
            <div class="partner-item">
                <img src="<?php echo get_theme_mod("partner_logo_$i", get_template_directory_uri() . "/src/img/partner$i.jpg"); ?>">
            </div>
        <?php endfor; ?>
    </div>
</div>
