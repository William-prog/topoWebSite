<header>
    <!-- Mobile navigation -->
    <nav id="mobile-nav" class="flex flex-jc-sb flex-ai-c hide-desktop">
        <a href="/">
            <img id="mobile-logo" src="img/logo.png" alt="Servicios y Equipos Topo S.A. de C.V." class="logo">
        </a>
        <a>
            <img id="mobile-menu" class="burger-menu" src="img/menu-white.png" onclick="openNav()" alt="menu" class="menu">
        </a>
    </nav>

    <!-- Desktop navigation -->
    <nav id="desktop-nav" class="col-4 flex-jc-sb flex-ai-c flex-jc-sa hide-mobile">
        <div class="logo-desktop">
            <a href="https://serviciosyequipostopo.com.mx/">
                <img id="desktop-logo" src="img/logo.png" alt="" class="">
            </a>
        </div>
        <div>
            <a class="nav-anchor" href="https://serviciosyequipostopo.com.mx/">Inicio</a>
        </div>
        <!--
        <div>
            <a class="nav-anchor" href="#service-section">Servicios</a>
        </div>            
         -->
        <div>
            <a class="nav-anchor" href="https://serviciosyequipostopo.com.mx/contact" target="_blank">Contácto</a>
        </div>
        <div>
            <a class="nav-anchor" href="https://serviciosyequipostopo.com.mx/careers" target="_blank">Empleos</a>
        </div>
    </nav>
</header>

<!-- Side nav for mobile version -->
<div id="mySidenav" class="sidenav hide-desktop">
    <a class="closebtn" onclick="closeNav()">&times;</a>
    <a href="https://serviciosyequipostopo.com.mx/">Inicio</a>    
    <a href="https://serviciosyequipostopo.com.mx/contact" target="noopener">Contacto</a>
    <a href="https://serviciosyequipostopo.com.mx/careers" target="noopener">Empleos</a>
</div>

<!-- Open side navigation script -->
<script src="js/open-side-navigation.js"></script>