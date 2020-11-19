<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Empleos - Servicios y Equipos Topo S.A. de C.V.</title>
</head>

<body>
    @include('header')

    <main>
        <div class="wrapper">
            <section class="careers-section">
                <div class="careers-img-container">
                    <img src="img/team.JPG" alt="Empleados de Servicios y Equipos Topo S.A. de C.V.">
                    <div class="career-img-overlay">
                        <h1>Forma parte del equipo <span class="orange-text">Topo</span></h1>
                    </div>
                </div>

                <h2 class="text-center pt-s">¿Qué nos hace diferentes?</h2>

                <div class="company-values pt-s">                    
                    <div class="values-container text-center">
                        <span class="orange-text"><i class="fas fa-bullhorn"></i></span>
                        <div class="value-description">
                            <h3>Comunicación</h3>            
                            <p>Escuchar, analizar e informar</p>
                        </div>            
                    </div>
                    <div class="values-container text-center">
                        <span class="orange-text"><i class="fas fa-award"></i></span>
                        <div class="value-description">
                            <h3>Calidad</h3>            
                            <p>Hacer las cosas bien a la primera, todo el tiempo</p>
                        </div>            
                    </div>
                    <div class="values-container text-center">
                        <span class="orange-text"><i class="far fa-handshake"></i></span>
                        <div class="value-description">
                            <h3>Confianza</h3>            
                            <p>Hacer las cosas que dices que vas a hacer</p>
                        </div>            
                    </div>
                    <div class="values-container text-center">
                        <span class="orange-text"><i class="fas fa-running"></i></span>
                        <div class="value-description">
                            <h3>Respuesta inmediata</h3>            
                            <p>Ser eficaz y certero en tu labor</p>
                        </div>            
                    </div>
                    <div class="values-container text-center">
                        <span class="orange-text"><i class="far fa-hand-peace"></i></span>
                        <div class="value-description">
                            <h3>Respeto</h3>            
                            <p>Trata a los demás como te gustaría ser tratado</p>
                        </div>            
                    </div>
                    <div class="values-container text-center">
                        <span class="orange-text"><i class="fas fa-flag-checkered"></i></span>
                        <div class="value-description">
                            <h3>Orientados a resultados</h3>            
                            <p>Rentabilidad con eficiencia</p>
                        </div>            
                    </div>
                </div>

                <div class="open-positions-container pt-m">
                    <div class="reveal-holder" data-aos="reveal-item">
                        <div class="reveal-block right" data-aos="reveal-right"></div>
                        <img width="100%" src="img/mine.JPG" alt="Interior mina en Servicios y Equipos Topo S.A. de C.V.">
                        <div class="position-button" data-aos="fade-down" data-aos-duration="750">
                            <a href="https://www.empleo.gob.mx/32-busqueda-de-ofertas-de-empleo-en-zacatecas" target="_blank">
                                <button type="submit" class="button-orange">                                    
                                        Ver posiciones abiertas                                    
                                </button>   
                            </a>
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
<!-- Font awesome CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>