<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156772003-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-156772003-2');
    </script>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#FF781F" />
    <!-- Link tags -->
    <link rel="icon" type="image/png" href="img/favicon.png"/>
    <link rel="stylesheet" href="css/appCustomStyles.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Servicios y Equipos TOPO S.A. de C.V.</title>
</head>
<body>
    <header>
        <nav id="mobile-nav" class="flex flex-jc-sb flex-ai-c hide-desktop">
            <a href="/">
                <img id="mobile-logo" src="img/logo.png" alt="Servicios y Equipos Topo S.A. de C.V." class="logo">
            </a>
            <a href="#">
                <img id="mobile-menu" class="burger-menu" src="img/menu-white.png" alt="menu" class="menu">
            </a>
        </nav>

        <nav id="desktop-nav" class="col-4 flex-jc-sb flex-ai-c flex-jc-sa hide-mobile">
            <div class="logo-desktop hide-mobile">
                <a href="#">
                    <img id="desktop-logo" src="img/logo.png" alt="" class="hide-mobile">
                </a>
            </div>
            <div>
                <a class="nav-anchor" href="/">Inicio</a>
            </div>
            <div>
                <a class="nav-anchor" href="#service-section">Servicios</a>
            </div>            
            <div>
                <a class="nav-anchor" href="#contact-section">Contácto</a>
            </div>
            <div>
                <a class="nav-anchor" href="careers">Empleos</a>
            </div>
        </nav>
    </header>

    <main>
        <section id="hero-section" class="hero-section">
                               
            <div class="hero-overlay">
                <div class="title-container">                    
                    <h1 class="white-text">Servicios y equipos <span class="orange-text">mineros</span> a toda la república mexicana</h1>                
                    <a href="#" class="button-gradient service-button mt-lg">Servicios</a>
                    <a href="#" class="button-gradient mt-lg">Contácto</a>                              
                </div>  
                <video class="hero-video" src="video/compressed.m4v" poster="img/hero-image.JPG" autoplay muted loop width="100%" height="100%"></video>                    
            </div>                                
         
        </section>

        <div class="wrapper">
            <section id="service-section" class="service-section text-center">
                <div class="service-container pb-xxs">
                    <h2 class="hi">
                        Nuestros servicios
                    </h2>
                    <div class="col-3">
                        <div class="service-item">                
                            <img src="img/icon-bolts.png" alt="">
                            <div class="service-description">
                                <h4>Venta de refacciones</h4>
                                <p>Contamos con un almacén preparado con todo tipo de herramientas listas para ser instaladas</p>
                            </div>
                        </div>
                        <div class="service-item">                
                            <img src="img/icon-fix.png" alt="">
                            <div class="service-description">
                                <h4>Reparación de equipos</h4>
                                <p>Nuestro taller está equipado con cabina de pintura, soldadura y diagnóstico de daños para mantener a tu operable</p>
                            </div>
                        </div>
                        <div class="service-item">                
                            <img src="img/icon-engineer.png" alt="">
                            <div class="service-description">
                                <h4>Mano de obra minera</h4>
                                <p>Nuestro personal es altamente capacitado para hacer realidad proyectos subterraneos y de contrucción</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="history-section" class="history-section text-center pt-s pb-s">
                <div class="history-frame">                                                   
                    <img data-aos="fade-right" data-aos-duration="750" src="img/history-image.JPG" alt="" class="radius-20">                    
                    <div class="history-container radius-20">
                        <h4>Más de <span class="orange-text">25 años</span>  de experiencia en la industria minera</h4>
                        <p>
                            Originalmente fundada en 1987, Servicios y Equipos Topo está posicionada entre una las contratistas mineras de mayor renombre de la repúlica mexicana.
                        </p>
                    </div>        
                    <div class="orange-square radius-20"></div>            
                </div>
                
                <!-- 
                <div class="history-frame mt-lg">
                    <img src="img/history-image.jpg" alt="" class="radius-20">
                    <div class="history-container radius-20">
                        <h4> <span class="orange-text">Excavación</span>  de túneles</h4>
                        <p>
                            Actualmente nos especializamos en proyectos de interior mina así como la reparación y reconstrucción de equipos
                        </p>
                    </div>
                </div>
                -->
            </section>

            <section id="partners-section" class="partners-section pt-m pb-s text-center">
                <div class="partners-container">
                    <div class="partners-img radius-20">
                        <div class="partners-overlay radius-20">
                            <h1 class=" white-text pt-xs pb-xs">Clientes y socios</h1>                                
                            <div  data-aos="fade-down" data-aos-duration="750" class="black-bg container map-container radius-20  white-text">                                                                
                                <img src="img/map.png" alt="mapa de la república mexicana" class="pt-xs map-img">
                                <div class="state-info">
                                    <h2>Hemos <span class="orange-text"> visitado: </span> </h2>                                                    
                                    <div class="slide-maps state-name slide-wrapper">                                    
                                        <div class="slider-city">
                                            <div class="slider-city-text1">Aguascalientes</div>
                                            <div class="slider-city-text2">Coahuila</div>
                                            <div class="slider-city-text3">Durango</div>
                                            <div class="slider-city-text4">D.F.</div>
                                            <div class="slider-city-text5">Guanajuato</div>
                                            <div class="slider-city-text6">Hidalgo</div>
                                            <div class="slider-city-text7">S.L.P.</div>
                                            <div class="slider-city-text8">Zacatecas</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div data-aos="fade-right" data-aos-duration="750" class="gray-text white-bg container mt-s radius-20 partners-box shadow">                    
                                <h2 class="pt-xs pb-xs">Socios</h2>
                                <div class="slider">
                                    <div class="slide-track">
                                        <div class="slide">
                                            <img src="img/partners/penoles-logo.png"  alt="peñoles" alt="" />
                                        </div>
                                        <div class="slide">
                                            <img src="img/partners/minerafresnillo-logo.png" alt="" />
                                        </div>
                                        <div class="slide">
                                            <img src="img/partners/robbins-logo.png"  alt="" />
                                        </div>
                                        <div class="slide">
                                            <img src="img/partners/coeurmining-logo.png"  alt="" />
                                        </div>        
                                        <div class="slide">
                                            <img src="img/partners/genco-logo.png" alt="" />
                                        </div>
                                        <div class="slide">
                                            <img src="img/partners/micon-logo.png" width="195px" alt="" />
                                        </div>
                                        <div class="slide">
                                            <img src="img/partners/penoles-logo.png" alt="peñoles" alt="" />
                                        </div>
                                        <div class="slide">
                                            <img src="img/partners/minerafresnillo-logo.png"  alt="" />
                                        </div>
                                        <div class="slide">
                                            <img src="img/partners/robbins-logo.png" alt="" />
                                        </div>
                                        <div class="slide">
                                            <img src="img/partners/coeurmining-logo.png"  alt="" />
                                        </div>
                                        <div class="slide">
                                            <img src="img/partners/genco-logo.png"  alt="" />
                                        </div>
                                        <div class="slide">
                                            <img src="img/partners/micon-logo.png" width="195px" alt="" />
                                        </div>        
                                    </div>
                                </div>
                            </div>
                        </div>            
                    </div>    
                </div>
            </section>

            <section id="contact-section" class="contact-section mt-lg text-center pt-m">
                <div class="contact-img radius-20">
                    <div class="contact-overlay radius-20">
                        <h1 class=" white-text pt-xs pb-xs">Contácto</h1>                                
                        <div data-aos="fade-right" data-aos-duration="750" class="black-bg container form-position radius-20  white-text">
                            <h2 class="pt-xs pb-xs"> <span class="orange-text">Comunícate</span> con nosotros</h2>                    
                            <div class="form-container">
                                <form method="POST" action="{{ route('send-message') }}">                                    
                                    @csrf
                                    <input required name="full-name" type="text" placeholder="Nombre completo">
                                    <input required name="sender" type="text" placeholder="Correo electrónico" class="mt-xs">
                                    <input required name="subject" type="text" placeholder="Asunto" class="mt-xs">
                                    <select required name="to-contact" id="">
                                        <option value="" disabled selected>Departamento al que dirige</option>
                                        <option value="Recursos humanos">Recursos humanos</option>
                                        <option value="Servicio a clientes">Servicio a clientes</option>
                                        <option value="Compras">Compras</option>
                                        <option value="Gerencia">Gerencia</option>
                                    </select>
                                    <input required name="message" type="text" placeholder="Mensaje" class="mt-xs">
                                    <div class="form-button-container">                                        
                                        <button type="submit" class="button-gradient">Enviar</button>   
                                    </div>
                                </form>                                                                                               
                            </div>
                        </div>

                        <div data-aos="fade-right" data-aos-duration="750" class="gray-text  white-bg container extra-info-position shadow radius-20 pb-xs mt-s">                                                
                            <h2 class="pt-xs pb-xs">Información adicional de contácto</h2>
                            <div class="extra-info-column">
                                <div class="map-container radius-20">                                                  
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1834.1830784091885!2d-102.8918168!3d23.1568326!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86830be391db3911%3A0xbe388955ea1b0ef6!2sServicios%20y%20Equipos%20Topo%20S.A.%20DE%20C.V.!5e0!3m2!1ses-419!2smx!4v1575931759306!5m2!1ses-419!2smx" 
                                        class="radius-20"
                                        width="90%" 
                                        height="100%"
                                        frameborder="0" 
                                        style="border:50px;" 
                                        allowfullscreen="true">
                                    </iframe>
                                </div>
                                <div class="extra-contact">
                                    <h5>Servicios y Equipos TOPO Fresnillo Zac.</h5>
                                    <div class="contact-info-container">
                                        <img src="img/phone.png" alt="teléfono servicios y equipos TOPO">
                                        <h5>492 134 02 53</h5>
                                    </div>
                                    <div class="contact-info-container">
                                        <img src="img/mail.png" alt="teléfono servicios y equipos TOPO">
                                        <h5>recursos.humanos@topo-int.com</h5>
                                    </div>
                                    <div class="contact-info-container">
                                        <img src="img/mail.png" alt="teléfono servicios y equipos TOPO">
                                        <h5>customerservice@topo-int.com</h5>
                                    </div>
                                    <div class="contact-info-container">
                                        <img src="img/clock.png" alt="teléfono servicios y equipos TOPO">
                                        <h5>Lun-Vie: 08:00am-06:00pm</h5>                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>            
                </div>    
            </section>
        </div>
    </main>

    <footer class="text-center">
        <div class="dirt-background"></div>
        <div class="footer-elements">
            <h3>Mapa del sitio</h3>
            <div class="site-map">                
                <a href="#">Inicio</a>
                <a href="#">Servicios</a>
                <a href="#">Contácto</a>
                <a href="/careers">Empleos</a>
            </div>
            <h3>Mantente conectado</h3>
            <div class="social">                
                <img src="img/facebook.svg" alt="facebook servicios y equipos topo">
                <img src="img/linkedin.svg" alt="linkedin servicios y equipos topo">
                <img src="img/whatsapp.svg" alt="whatsapp servicios y equipo topo">
            </div>
            <p>2020 Servicios y Equipos TOPO S.A. de C.V. Todos los derechos reservados</p>
        </div>
    </footer>
</body>
</html>
<!-- Change header style when scrolling -->
<script src="js/scroll.js"></script>
<!-- Jump to section when clicking anchor -->
<script src="js/jump-section.js"></script>
<!-- AOS fade animation library -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>