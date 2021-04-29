<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link media="screen" rel="stylesheet" href="css/appCustomStyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>Vacantes disponibles</title>
</head>

<style>
    body {
        background-color: #333333;
        color: #fff;
        height: 100%;
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
</style>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="container">
        <div class="row">
            <div class="col pb-5 pt-5">
                <div class="row">
                    <!-- Job post starts here -->
                    {{ setlocale(LC_ALL, 'Spanish_Mexican') }}
                    @foreach ($existingJobPosts as $record)
                    <div class="card text-white bg-dark mb-3" style="max-width: 65%;">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-1">
                                    <img src="img/favicon.png" alt="">
                                </div>
                                <div class="col d-flex justify-content-end">
                                    @php
                                    setlocale(LC_TIME, 'es');
                                    echo 'Publicado el día: ' . $record->created_at->formatLocalized('%d de %B %Y');
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

                <p id="demo"></p>
            </div>
            <!-- Job post description -->
            <div class="col pb-5 pt-5 sticky-top">
                <div class="row">
                    <div class="card text-white bg-dark mb-3" style="max-width: 100%;">
                        <div class="card-header">
                            <div class="row text-center">
                                <h3 id="job_title" name="job_title" class="text-center">
                                    <div class="spinner-grow text-warning" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-warning" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-warning" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row pt-3 pb-3">
                                <h5 class="card-title"><i class="fas fa-tasks"></i> Responsabilidades y requerimientos:</h5>
                                <div class="container">
                                    <ul class="list-group">
                                        <li class="list-group-item dark-list-group"><i class="fas fa-caret-right"></i> Desarrollar sistemas a la medida para automatizar procesos y reducir costos</li>
                                        <li class="list-group-item dark-list-group"><i class="fas fa-caret-right"></i> Dar mantenimiento correctivo y preventivo a equipo de cómputo</li>
                                        <li class="list-group-item dark-list-group"><i class="fas fa-caret-right"></i> Implementar procesos</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row pt-3 pb-3">
                                <h5 class="card-title"><i class="fas fa-business-time"></i> Experiencia:</h5>
                                <div class="container">
                                    <ul class="list-group">
                                        <li id="job_experience" class="list-group-item dark-list-group">
                                            <div class="spinner-grow text-warning" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                            <div class="spinner-grow text-warning" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                            <div class="spinner-grow text-warning" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row pt-3 pb-3">
                                <h5 class="card-title"><i class="fas fa-user-graduate"></i> Educación:</h5>
                                <div class="container">
                                    <ul class="list-group">
                                        <li id="job_education" class="list-group-item dark-list-group">
                                            <div class="spinner-grow text-warning" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                            <div class="spinner-grow text-warning" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                            <div class="spinner-grow text-warning" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </li>
                                    </ul>
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
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="get" action="/send" role="form">
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre completo:</label>
                            <input type="text" class="form-control" id="recipient-name" name="sender_name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-mail" class="col-form-label">Correo electrónico:</label>
                            <input type="text" class="form-control" id="recipient-mail" name="sender_email">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-phone" class="col-form-label">Número telefónico:</label>
                            <input type="text" class="form-control" id="recipient-phone" name="sender_number">
                        </div>
                        <div class="mb-3">
                            <i class="far fa-file-pdf"></i>
                            <label for="recipient-cv" class="col-form-label">Curriculum (en PDF):</label>
                            <input type="file" accept=".pdf" class="form-control" id="recipient-cv">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fas fa-times"></i> Cancelar</button>
                            <button type="submit" class="btn btn-warning"><i class="fas fa-mail-bulk"></i> Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script src="/js/ajax-get-job-info.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>