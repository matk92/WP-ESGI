<?php
// menu.php
?>
<div class="menu">
    <div class="logo">
        <h1>ESGI.</h1>
        <p>Or try Search</p>
    </div>
    <nav class="menu-items">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary_menu',
            'container' => false,
            'menu_class' => 'nav-menu',
            'fallback_cb' => '__return_false'
        ));
        ?>
    </nav>
    <div class="close-menu">
        <span>&times;</span>
    </div>
</div>
<button class="open-menu">☰</button>

<script>
    const menu = document.querySelector('.menu');
    const openMenuButton = document.querySelector('.open-menu');
    const closeMenuButton = document.querySelector('.close-menu span');

    openMenuButton.addEventListener('click', function() {
        menu.classList.add('open');
    });

    closeMenuButton.addEventListener('click', function() {
        menu.classList.remove('open');
    });
</script>