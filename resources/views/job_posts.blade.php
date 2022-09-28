<!DOCTYPE html>
<html lang="es">
<!-- Personalidazada -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link media="screen" rel="stylesheet" href="css/appCustomStyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>Vacantes disponibles</title>
</head>

<style>
    body {
        background-color: #212529;
        /* background-image: url("https://serviciosyequipostopo.com.mx/img/topo-interior-mina.webp"); */
        background-size: cover;
        background-repeat: no-repeat;
        overflow-x: hidden;
        color: #fff;
        height: 100% !important;
        min-height: 100vh;
    }

    input {
        background-color: #333 !important;
        color: #fff !important;
    }

    .dark-list-group {
        background-color: #333;
        color: #fff;
    }

    .modal {
        color: #333;
    }

    .modal-content {
        background-color: #212529;
        color: #fff;
    }

    .job-posts-scroll {
        width: 100%;
        height: 85%;
        overflow-x: hidden;
        overflow-y: auto;
        padding: 20px 0px;
        margin: 0px 10px;
    }

    .job-post-card {
        cursor: pointer;
        color: #fff;
        transition: .5s;
    }

    .job-post-card:hover {
        background-color: rgba(251, 119, 32, .50);
        color: #212529;
        /* width: 67% !important; */
        /* height: 150px; */
    }

    .sticky-form {
        position: sticky;
        top: 10px;
        max-width: 100%;
        height: 15%;
        width: 100%;
    }

    .card {
        box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2);
        border-radius: 5px;
        background-color: rgba(0, 0, 0, .50);

        backdrop-filter: blur(5px);
    }

    .targetEmpleo {
        width: 85%;
    }

    .alert-dark {
        background-color: #333;
        border-color: #333;

    }

    /*New job post form*/
    select,
    option {
        background-color: #333 !important;
        color: #fff !important;
    }

    .desktop {
        display: block;
    }

    .movile {
        display: none;
    }

    @media only screen and (max-width: 768px) {
        .targetEmpleo {
            width: 100%;
        }

        .desktop {
            display: none;
        }

        .movile {
            display: block;
        }


    }
</style>

<body>
    <!-- Navbar -->
    @include('job_market_header')

    <!-- Side nav for mobile version -->
    <div id="mySidenav" class="sidenav hide-desktop">
        <a class="closebtn" onclick="closeNav()">&times;</a>
        <a href="https://serviciosyequipostopo.com.mx/">Inicio</a>
        <a href="https://serviciosyequipostopo.com.mx/contact" target="noopener">Contacto</a>
        <a href="https://serviciosyequipostopo.com.mx/careers" target="noopener">Empleos</a>
    </div>

    <!-- Open side navigation script -->
    <script src="js/open-side-navigation.js"></script>

    <!-- Main content -->
    <div class="container">
        <div class="row">
            <div class="col-md-7 pb-5 pt-5">
                <div class="row">
                    <!-- Job post starts here -->
                    {{ setlocale(LC_ALL, 'Spanish_Mexican') }}
                    @foreach ($existingJobPosts as $record)
                    <div onclick="makeRequest({{ $record->id }});" class="targetEmpleo card mb-3 job-post-card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-1">
                                    <img src="img/favicon.png" alt="">
                                </div>
                                <div class="col d-flex justify-content-end">
                                    @php
                                    setlocale(LC_TIME, 'es');
                                    echo 'Publicado el: ' . $record->created_at->formatLocalized('%d de %B del %Y');
                                    @endphp
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="card-title pt-0 pb-3">{{ $record->job_title }}</h4>
                                </div>
                                <div class="col-md-4">
                                    <button onclick="makeRequest({{ $record->id }});" type="button" class="desktop btn" style="background-color: rgba(251, 119, 32); font-weight: 700;"><i class="far fa-eye"></i> Ver detalles</button>
                                    
                                    <button type="button" class="movile btn" style="background-color: rgba(251, 119, 32); font-weight: 700; margin: auto" data-bs-toggle="modal" data-bs-target="#exampleModalEmpleo">
                                        <h4>
                                            <i class="fas fa-paper-plane"></i> Ver detalles
                                        </h4>
                                    </button>
                                </div>
                            </div>


                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- -->
                <p class="invisible" id="demo"></p>
            </div>
            <div class="col pb-5 pt-5 sticky-form">
                <div class="row">
                    <div class="desktop card text-white mb-3" style="max-width: 100%;">
                        <div class="card-header" style="display: none;">
                            <div class="row text-center">
                                <h3 id="job_title" name="job_title" class="text-center">
                                    <div class="alert alert-dark align-middle d-flex align-items-center mt-3" role="alert">
                                        <div class="invisible">
                                            <div id="spinner-element">
                                                <div class="spinner-border text-warning" role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">

                            <div id="images" class="transp">
                            </div>

                            <div style="display: none;" class="row pt-3 pb-3">
                                <h5 class="card-title"><i class="fas fa-tasks"></i> Responsabilidades y requerimientos:</h5>
                                <div class="container">
                                    <ul class="list-group" id="responsability-list-container">
                                        <div class="alert alert-dark align-middle d-flex align-items-center mt-3" role="alert">
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <div style="display: none;" class="row pt-3 pb-3">
                                <div class="col">
                                    <div class="col">
                                        <h5 class="card-title"><i class="fas fa-business-time"></i> Experiencia:</h5>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <ul class="list-group">
                                                <li id="job_experience" class="list-group-item dark-list-group">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="col">
                                        <h5 class="card-title"><i class="fas fa-user-graduate"></i> Educación:</h5>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <ul class="list-group">
                                                <li id="job_education" class="list-group-item dark-list-group">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3 pb-3">
                                <!-- <button id="apply-button" disabled="true" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h4>
                                        <i class="fas fa-paper-plane"></i> Postularse
                                    </h4>
                                </button> -->

                                <button type="button" class="btn" style="background-color: rgba(251, 119, 32); font-weight: 700;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h4>
                                        <i class="fas fa-paper-plane"></i> Postularse
                                    </h4>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalEmpleo" tabindex="-1" aria-labelledby="exampleModalLabelEmpleo" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Informacion de la vacante</h5>
                    <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="imagesModal" class="transp">
                    </div>
                    <div class="row pt-3 pb-3">
                        <button type="button" class="btn" style="background-color: rgba(251, 119, 32); font-weight: 700;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <h4>
                                <i class="fas fa-paper-plane"></i> Postularse
                            </h4>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Proporciona la información requerida</h5>
                    <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Waiting for CV to go through -->
                    <div id="waiting-modal" class="col text-center d-none">
                        <div class="row">
                            <h4>Estamos recibiendo su curriculum</h4>
                            <h5>Por favor espere...</h5>
                        </div>
                        <div class="spinner-border text-warning align-items-center" style="width: 4rem; height: 4rem;" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>

                    <!-- CV has been sent -->
                    <div id="finished-modal" class="text-center d-none">
                        <div class="row">
                            <h4>Gracias por hacernos llegar tu información</h4>
                            <h5 class="pt-4 pb-4">Nos comunicaremos contigo a la brevedad posible</h5>
                            <h1 class="text-success"><i class="far fa-check-circle fa-5x"></i></h1>
                        </div>
                    </div>

                    <!-- User enters info to be sent -->
                    <div id="form-modal">
                        <form onsubmit="sendFormData(event);" id="application-form" method="post" action="/send" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nombre completo:</label>
                                <input type="text" class="form-control" id="recipient-name" name="sender_name" placeholder="Ej: Daniel Briceño Gutiérrez" required>
                                <input type="text" name="modal-job-title-field" class="visually-hidden" id="modal-job-title">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-mail" class="col-form-label">Correo electrónico:</label>
                                <input type="text" class="form-control" id="recipient-mail" name="sender_email" placeholder="Ej: ingeniero_briceño@gmail.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="recipient-phone" class="col-form-label">Número telefónico:</label>
                                <input type="text" class="form-control" id="recipient-phone" name="sender_number" placeholder="Ej: 4937145296" required>
                            </div>
                            <div class="mb-3">
                                <i class="far fa-file-pdf"></i>
                                <label for="recipient-cv" class="col-form-label">Curriculum (en PDF):</label>
                                <input lang="es" type="file" accept=".pdf" class="form-control" id="recipient-cv" name="sender_cv">
                            </div>
                            <div class="mb-3" style="text-align: center;">
                                <a href="mailto:reclutamiento@topo-int.com?Subject=Postulacion%20de%20empleo" style="color: rgba(251, 119, 32); font-weight: 700;;">Puedes redactar tu correo aqui</a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fas fa-times"></i> Cancelar</button>
                                <button id="send_application_button" type="submit" class="btn btn-warning"><i class="fas fa-mail-bulk"></i> Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>

<!-- Sweet alert CDN -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- Query job info of selected card -->
<script>
    var httpRequest;
    var jsonResponse;
    var jobValuesArray;
    // Spinner element
    var spinnerElement = document.getElementById('spinner-element');
    // Apply button element
    var applyButton = document.getElementById('apply-button');
    // Modal form elements
    var jobTitleField = document.getElementById('job_title');
    var responsabilityContiner = document.getElementById('responsability-list-container');
    var jobTitleModalField = document.getElementById('modal-job-title');
    var jobExperienceField = document.getElementById('job_experience');
    var jobEducationField = document.getElementById('job_education');

    function makeRequest(jobPostId) {
        httpRequest = new XMLHttpRequest();

        jobTitleField.innerHTML = spinnerElement.innerHTML;
        responsabilityContiner.innerHTML = spinnerElement.innerHTML;
        jobTitleModalField.value = spinnerElement.innerHTML;
        jobExperienceField.innerHTML = spinnerElement.innerHTML;
        jobEducationField.innerHTML = spinnerElement.innerHTML;

        httpRequest.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML = this.responseText;
                jsonResponse = JSON.parse(this.responseText);
                jobValuesArray = jsonResponse[0];

                addResponsabilities(jobValuesArray.job_responsabilities);
                setValuesToFormFields(jobValuesArray);
            }
        };

        httpRequest.open('GET', '/get-job-post/' + jobPostId, true);
        httpRequest.send();


    }

    function setValuesToFormFields(jobValuesArray) {
        jobTitleField.innerHTML = jobValuesArray['job_title'];
        jobTitleModalField.value = jobValuesArray['job_title'];
        jobExperienceField.innerHTML = jobValuesArray['job_experience'];
        jobEducationField.innerHTML = jobValuesArray['job_education'];

        document.getElementById('images').innerHTML = '';

        let images = document.getElementById("images");

        let newimg = document.createElement("img");
        newimg.setAttribute("src", "img/Soli/" + jobValuesArray['job_title'] + ".JPG");
        newimg.setAttribute("style", "margin: auto; width: 100%; border-radius: 2%;");
        images.appendChild(newimg);




        document.getElementById('imagesModal').innerHTML = '';

        let imagesModal = document.getElementById("imagesModal");

        let newimgMoldal = document.createElement("img");
        newimgMoldal.setAttribute("src", "img/Soli/" + jobValuesArray['job_title'] + ".JPG");
        newimgMoldal.setAttribute("style", "margin: auto; width: 100%; border-radius: 2%;");
        imagesModal.appendChild(newimgMoldal);


    }

    function addResponsabilities(responsabilityList) {
        responsabilityList = JSON.parse(responsabilityList);
        responsabilityContiner.innerHTML = '';

        for (let i = 0; i < responsabilityList.length; i++) {
            var responsabilityItem = document.createElement('li');

            responsabilityItem.classList.add('list-group-item', 'dark-list-group');

            responsabilityItem.innerHTML = responsabilityList[i];
            responsabilityContiner.appendChild(responsabilityItem);
        }
    }
</script>

<!-- send CV to HR e-mail -->
<script>
    var waitingModalContent = document.getElementById('waiting-modal');
    var finishedModalContent = document.getElementById('finished-modal');
    var formModalContent = document.getElementById('form-modal');
    var pdfFileInput = document.getElementById('recipient-cv');
    const allowedPDFFileSize = 1024000;

    function sendFormData(e) {
        var obtainedFileSize = pdfFileInput.files[0].size;
        var formElement = document.getElementById('application-form');
        var formData = new FormData(formElement);

        if (obtainedFileSize <= allowedPDFFileSize) {
            httpRequest = new XMLHttpRequest();
            httpRequest.open('POST', '/send', true);

            httpRequest.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log("Making request");
                    // change modal content after the request is finished
                    hideModalContent(waitingModalContent);
                    displayModalContent(formModalContent);
                    launchSuccessAlert();
                }

                if (this.status == 500) {
                    console.log("Handling error");
                    // change modal content after the request is finished
                    hideModalContent(waitingModalContent);
                    displayModalContent(formModalContent);
                    launchSuccessAlert();
                }
            };

            httpRequest.send(formData);

            // change modal content while the request is done
            hideModalContent(formModalContent);
            displayModalContent(waitingModalContent);
            // prevent redirect after form is sent
            e.preventDefault();
        } else {
            launchWarningAlert();
            e.preventDefault();
        }

    }

    function launchSuccessAlert() {
        Swal.fire(
            'Hemos recibido su aplicación para la vacante',
            'Nos pondremos en contacto, gracias.',
            'success'
        )
    }

    function launchWarningAlert() {
        Swal.fire(
            'El documento proporcionado rebasa el limite de tamaño permitido',
            'Asegúrate de que el documento sea de 1 Megabyte o menos',
            'warning'
        )
    }

    function launchErrorAlert() {
        Swal.fire(
            'Hubo un error al recibir su información',
            'Recargue la página e intente de nuevo',
            'error'
        )
    }

    function displayModalContent(elementToDisplay) {
        elementToDisplay.classList.remove('d-none');
    }

    function hideModalContent(elementToHide) {
        elementToHide.classList.add('d-none');
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>