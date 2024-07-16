<div class="partners">
    <h1>Our Partners</h1>
    <div class="custom-fields">
        <div class="partners-logos">
            <?php
            for($i = 1; $i <= 6; $i++) {
                $logo = get_theme_mod('partner_logo_'.$i);
                if($logo) {
                    echo '<img src="'.esc_url($logo).'" alt="Partner Logo">';
                }
            }
            ?>
        </div>
    </div>
</div>
