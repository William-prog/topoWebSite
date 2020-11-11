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
    <title>Contácto - Servicios y Equipos Topo S.A. de C.V.</title>
</head>



<body>
    @include('header')

    <section id="contact-section" class="contact-section pt-m">
        <div class="contact-img radius-20">
            <div class="contact-overlay radius-20">    
                
                <!-- Container for the maps cards -->
                <div>
                    <!-- Mexico contact info -->
                    <div class="gray-text white-bg container text-center extra-info-position shadow radius-20 pb-xs">                                                
                        <h2 class="pt-xs pb-xxs"><img src="img/mexicanflag.png" alt="¡Viva México!" width="10%"></h2>    
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
                                <h5></h5>
                                <div class="contact-info-container">
                                    <img src="img/phone.png" alt="teléfono servicios y equipos TOPO">
                                    <h5>555 555 555 555</h5>
                                </div>
                                <div class="contact-info-container">
                                    <img src="img/mail.png" alt="teléfono servicios y equipos TOPO">
                                    <h5>doe@topo-int.com</h5>
                                </div>
                                <div class="contact-info-container">
                                    <img src="img/clock.png" alt="teléfono servicios y equipos TOPO">
                                    <h5>Lun-Vie: 08:00am-06:00pm</h5>                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- USA contact info -->
                    <div class="pt-xs">
                        <div class="gray-text white-bg container text-center extra-info-position shadow radius-20 pb-xxs">                                                
                            <h2 class="pt-xs pb-xxs"><img src="img/usflag.png" alt="God bless America" width="10%"></h2>                            
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
                                    <h5></h5>
                                    <div class="contact-info-container">
                                        <img src="img/phone.png" alt="teléfono servicios y equipos TOPO">
                                        <h5>555 555 555 555</h5>
                                    </div>
                                    <div class="contact-info-container">
                                        <img src="img/mail.png" alt="teléfono servicios y equipos TOPO">
                                        <h5>doe@topo-int.com</h5>
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

                <div class="black-bg container form-position radius-20 white-text shadow">
                    <h2 class="pt-xs pb-xxs text-center"> <span class="orange-text">Comunícate</span> con nosotros</h2>                    
                    <div class="form-container">
                        <form class="content-center" method="POST" action="{{ route('send-message') }}">                                    
                            @csrf
                            <div class="form-grid-container">
                                <div class="form-input-container">
                                    <label for="full-name">Nombre completo:</label>
                                    <input required name="full-name" id="full-name" type="text">
                                </div>
                                <div class="form-input-container">
                                    <label for="e-mail">Correo electrónico:</label>
                                    <input required name="sender" id="e-mail" type="text" class="mt-xs">
                                </div>
                                <div class="form-input-container">
                                    <label for="subject">Asunto del mensaje:</label>
                                    <select required name="to-contact" id="department">
                                        <option value="" disabled selected>Elige una opción</option>
                                        <option value="Solicito información">Solicito información</option>
                                        <option value="Sugerencia">Sugerencia</option>
                                        <option value="Soy proveedor de servicios y/o productos">Soy proveedor de servicios y/o productos</option>
                                        <option value="Cotización">Cotización</option>
                                    </select>
                                </div>
                                <div class="form-input-container">
                                    <label for="department">Dirigido a:</label>
                                    <select required name="to-contact" id="department">
                                        <option value="" disabled selected>Elige una opción</option>
                                        <option value="Recursos humanos">Recursos humanos</option>
                                        <option value="Servicio a clientes">Servicio a clientes</option>
                                        <option value="Compras">Compras</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-input-container">
                                <label for="message">Mensaje:</label>
                                <textarea required name="message" id="message" cols="30" rows="4"></textarea>
                            </div>
                            <div class="form-button-container">                                        
                                <button type="submit" class="button-white">Enviar</button>   
                            </div>
                        </form>                                                                                               
                    </div>
                </div>
            </div>            
        </div>    
    </section>
</body>
</html>