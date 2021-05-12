<!DOCTYPE html>
<html lang="es">

<head>
    @include('job_market_styles')
    <title>Vacantes disponibles</title>
</head>

<body>
    <!-- Navbar -->
    @include('job_market_header')

    <!-- Main content -->
    <div class="container">
        <div class="row">
            <div class="col pb-5 pt-5">
                <div class="row">
                    <!-- Job post starts here -->
                    {{ setlocale(LC_ALL, 'Spanish_Mexican') }}
                    @foreach ($existingJobPosts as $record)
                    <div onclick="makeRequest({{ $record->id }});" class="card text-white bg-dark mb-3 job-post-card" style="width: 65%;">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-1">
                                    <img src="img/favicon.png" alt="">
                                </div>
                                <div class="col d-flex justify-content-end">
                                    @php
                                    setlocale(LC_TIME, 'es');
                                    echo 'Publicado el: ' . $record->created_at->formatLocalized('%d-%B-%Y');
                                    @endphp
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title pt-3 pb-3">{{ $record->job_title }}</h4>
                            <button onclick="makeRequest({{ $record->id }});" type="button" class="btn btn-warning"><i class="far fa-eye"></i> Ver detalles</button>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- -->
                <p class="invisible" id="demo"></p>
            </div>
            <!-- Job post description -->
            <div class="col pb-5 pt-5 sticky-form">
                <div class="row">
                    <div class="card text-white bg-dark mb-3" style="max-width: 100%;">
                        <div class="card-header">
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
                            <div class="row pt-3 pb-3">
                                <h5 class="card-title"><i class="fas fa-tasks"></i> Responsabilidades y requerimientos:</h5>
                                <div class="container">
                                    <ul class="list-group" id="responsability-list-container">
                                        <div class="alert alert-dark align-middle d-flex align-items-center mt-3" role="alert">                                            
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <div class="row pt-3 pb-3">
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
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                        <form id="application-form" method="post" action="/send" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nombre completo:</label>
                                <input type="text" class="form-control" id="recipient-name" name="sender_name" placeholder="Ej: Daniel Briceño Gutiérrez">
                                <input type="text" name="modal-job-title-field" class="visually-hidden" id="modal-job-title">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-mail" class="col-form-label">Correo electrónico:</label>
                                <input type="text" class="form-control" id="recipient-mail" name="sender_email" placeholder="Ej: ingeniero_briceño@gmail.com">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-phone" class="col-form-label">Número telefónico:</label>
                                <input type="text" class="form-control" id="recipient-phone" name="sender_number" placeholder="Ej: 4937145296">
                            </div>
                            <div class="mb-3">
                                <i class="far fa-file-pdf"></i>
                                <label for="recipient-cv" class="col-form-label">Curriculum (en PDF):</label>
                                <input lang="es" type="file" accept=".pdf" class="form-control" id="recipient-cv" name="sender_cv">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fas fa-times"></i> Cancelar</button>
                                <button onclick="sendFormData(event);" id="send_application_button" type="submit" class="btn btn-warning"><i class="fas fa-mail-bulk"></i> Enviar</button>
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
<script src="/js/ajax-get-job-info.js"></script>
<!-- send CV to HR e-mail -->
<script src="/js/ajax-send-application.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>