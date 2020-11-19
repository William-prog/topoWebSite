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
            <a href="#">
                <img id="desktop-logo" src="img/logo.png" alt="" class="">
            </a>
        </div>
        <div>
            <a class="nav-anchor" href="/">Inicio</a>
        </div>
        <!--
        <div>
            <a class="nav-anchor" href="#service-section">Servicios</a>
        </div>            
         -->
        <div>
            <a class="nav-anchor" href="contact" target="_blank">Contácto</a>
        </div>
        <div>
            <a class="nav-anchor" href="careers">Empleos</a>
        </div>
    </nav>
</header>

<!-- Side nav for mobile version -->
<div id="mySidenav" class="sidenav hide-desktop">
    <a class="closebtn" onclick="closeNav()">&times;</a>
    <a href="/">Inicio</a>
    <a onclick="closeNav()">Servicio</a>  
    <a href="/contact">Contacto</a>
    <a href="careers">Empleos</a>
</div>

<!-- Open side navigation script -->
<script src="js/open-side-navigation.js"></script>