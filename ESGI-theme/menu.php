<div class="menu">
    <div class="logo">
        <h1>ESGI.</h1>
        <p>Or try Search</p>
    </div>
    <nav class="menu-items">
        <ul>
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#partners">Partners</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contacts">Contacts</a></li>
        </ul>
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
