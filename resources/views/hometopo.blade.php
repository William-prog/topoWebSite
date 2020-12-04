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
                    <div class="call-to-action-container">
                        <a href="#" class="button-white service-button mt-xxs">Saber más de nosotros</a>
                        <a href="#" class="button-orange mt-xxs">Deseo ponerme en contácto</a>                              
                    </div>
                </div>  
                <video class="hero-video" src="video/compressed.m4v" autoplay muted loop width="100%" height="100%"></video>                    
            </div>                                         
        </section>

        <div class="">
            <section id="service-section" class="service-section text-center wrapper">
                <div class="service-container pb-xxs">
                    <h2 class="hi pb-xs">
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

            <section class="gallery-section pt-s pb-xxs">            
                <div class="gallery-grid">
                    <div class="reveal-holder" data-aos="reveal-item">
                        <div class="reveal-block right" data-aos="reveal-right"></div>
                        <img width="100%"  src="img/topo interior mina.JPG" alt="Servicios y Equipos Topo S.A. de C.V. interior mina">                    
                    </div>
                    <div data-aos="fade-down" data-aos-duration="750" class="gallery-text text-box">
                        <div class="">
                            <h2 class="pr-xxs pb-xs pl-xxs text-center">Más de <span class="orange-text">30 años</span>  de experiencia en la industria minera</h2>
                            <p class="pr-xxs pl-xxs">
                                Originalmente fundada en 1987, Servicios y Equipos Topo está posicionada entre una las contratistas mineras de mayor renombre de la repúlica mexicana.
                            </p>
                        </div>
                    </div>   
                </div>
            </section>

            <section class="gallery-section pt-s pb-xs">            
                <div class="gallery-grid grid-reverse">
                    <div data-aos="fade-down" data-aos-duration="750" class="gallery-text text-box">
                        <div class="">
                            <h2 class="pr-xxs pb-xs pl-xxs text-center">Más de <span class="orange-text">25 años</span>  de experiencia en la industria minera</h2>
                            <p class="pr-xxs pl-xxs">
                                Originalmente fundada en 1987, Servicios y Equipos Topo está posicionada entre una las contratistas mineras de mayor renombre de la repúlica mexicana.
                            </p>
                        </div>
                    </div>  
                    <div class="reveal-holder" data-aos="reveal-item">
                        <div class="reveal-block right" data-aos="reveal-right"></div>
                        <img width="100%"  src="img/topo-worker.JPG" alt="Servicios y Equipos Topo S.A. de C.V. maquinaria en interior mina">                    
                    </div>                     
                </div>
            </section>

            <section id="partners-section" class="partners-section pt-m text-center">
                <div class="partners-container">
                    <div class="partners-img radius-20">
                        <div class="partners-overlay radius-20">
                            <h1 class=" white-text pt-xs pb-xs">Clientes y socios</h1>                                
                            <div  data-aos="fade-down" data-aos-duration="750" class="black-bg-gradient shadow container map-container radius-20  white-text">                                                                
                                <img src="img/map.png" alt="mapa de la república mexicana" class="pt-xs map-img">
                                <div class="state-info">
                                    <h2>Hemos <span class="orange-text"> visitado: </span> </h2>                                                    
                                    <div class="slide-maps state-name slide-wrapper pt-xxs pb-xxs">                                    
                                        <div class="slider-city">
                                            <div class="slider-city-text1">Aguascalientes</div>
                                            <div class="slider-city-text2">Coahuila</div>
                                            <div class="slider-city-text3">Durango</div>
                                            <div class="slider-city-text4">D.F.</div>
                                            <div class="slider-city-text5">Guanajuato</div>
                                            <div class="slider-city-text6">Hidalgo</div>
                                            <div class="slider-city-text7">San Luis Potosí</div>
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
<!-- AOS fade animation library -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>  
    AOS.init(/*{
        once: true
    }*/);
</script>
<!-- Change header style when scrolling -->
<script src="js/scroll.js"></script>
<!-- Jump to section when clicking anchor -->
<script src="js/jump-section.js"></script>