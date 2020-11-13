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
    <meta name="description" content="Servicios y equipos de mineria con más de 30 años de experiencia. Reparación y mantenimiento, contamos con cabina de pintura, shotblast, mano de obra minera.">
    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
    <!-- Link tags -->
    <link rel="icon" type="image/png" href="img/favicon.png"/>
    <link rel="stylesheet" href="css/appCustomStyles.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Servicios y Equipos TOPO S.A. de C.V.</title>
</head>
<body>
    @include('header')

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
                                            <a href="http://www.fresnilloplc.com/" target="_blank">
                                                <img src="img/partners/minerafresnillo-logo.png" alt="" />
                                            </a>                                            
                                        </div>
                                        <div class="slide">
                                            <a href="https://www.therobbinscompany.com/es/" target="_blank">
                                                <img src="img/partners/robbins-logo.png"  alt="" />
                                            </a>                                            
                                        </div>
                                        <div class="slide">
                                            <a href="https://www.coeur.com/" target="_blank">
                                                <img src="img/partners/coeurmining-logo.png"  alt="" />
                                            </a>                                            
                                        </div>        
                                        <div class="slide">
                                            <a href="https://gencomineservice.com/" target="_blanks">
                                                <img src="img/partners/genco-logo.png" alt="" />
                                            </a>                                            
                                        </div>
                                        <div class="slide">
                                            <a href="https://www.micon-drilling.de/MD/en/index.php">
                                                <img src="img/partners/micon-logo.png" width="195px" alt="" />
                                            </a>                                            
                                        </div>
                                        <div class="slide">
                                            <a href="https://www.penoles.com.mx/" target="_blank">
                                                <img src="img/partners/penoles-logo.png" alt="peñoles" alt="" />
                                            </a>                                            
                                        </div>
                                        <div class="slide">
                                            <a href="http://www.fresnilloplc.com/" target="_blank">
                                                <img src="img/partners/minerafresnillo-logo.png" alt="" />
                                            </a>
                                        </div>
                                        <div class="slide">
                                            <a href="https://www.therobbinscompany.com/es/" target="_blank">
                                                <img src="img/partners/robbins-logo.png"  alt="" />
                                            </a>  
                                        </div>
                                        <div class="slide">
                                            <a href="https://www.coeur.com/" target="_blank">
                                                <img src="img/partners/coeurmining-logo.png"  alt="" />
                                            </a>
                                        </div>
                                        <div class="slide">
                                            <a href="https://gencomineservice.com/" target="_blanks">
                                                <img src="img/partners/genco-logo.png" alt="" />
                                            </a>
                                        </div>
                                        <div class="slide">
                                            <a href="https://www.micon-drilling.de/MD/en/index.php">
                                                <img src="img/partners/micon-logo.png" width="195px" alt="" />
                                            </a>
                                        </div>  
                                        <div class="slide">
                                            <a href="https://www.penoles.com.mx/" target="_blank">
                                                <img src="img/partners/penoles-logo.png" alt="peñoles" alt="" />
                                            </a>                                            
                                        </div>     
                                    </div>
                                </div>
                            </div>
                        </div>            
                    </div>    
                </div>
            </section>
        </div>
    </main>

    @include('footer')                                       
</body>
</html>
<!-- Jump to section when clicking anchor -->
<script src="js/jump-section.js"></script>
<!-- Change header style when scrolling -->
<script src="js/scroll.js"></script>
<!-- AOS fade animation library -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>