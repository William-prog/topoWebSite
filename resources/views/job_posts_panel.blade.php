<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link media="screen" rel="stylesheet" href="css/appCustomStyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/job-post-styles.css">
    <title>Vacantes disponibles</title>
</head>

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
            <!-- Create job post form -->
            <div class="col pb-5 pt-5 sticky-form">
                <div class="row">
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-header">
                            <div class="row text-center">
                                <h3 class="text-center">Añadir nueva vacante</h3>
                            </div>
                        </div>
                        <form id="job-post-form" method="POST" action="/create-job-post" role="form">
                            @csrf
                            <div class="card-body">
                                <div class="row pt-3 pb-3">
                                    <h5 class="card-title"><i class="fas fa-user-tie"></i> Nombre del puesto:</h5>
                                    <div class="container">
                                        <ul class="list-group">
                                            <input name="job-title" placeholder="Ej: Operador de TBM" type="text" class="form-control" id="job_title" maxlength="65" aria-describedby="emailHelp">
                                        </ul>
                                        @if ($errors->any())
                                        <h1>La regaste</h1>
                                        @endif
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="row mt-3 mb-3">
                                        <div class="col-10">
                                            <h5 class="card-title"><i class="fas fa-tasks"></i> Responsabilidades y requerimientos:</h5>
                                        </div>
                                        <div class="col d-flex justify-content-end">
                                            <button onclick="addTextField();" type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Añadir nuevo campo"><i class="fas fa-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <ul class="list-group">
                                            <li class="list-group-item dark-list-group" id="list-text-container">
                                                <div id="list-text-item" class="remove-1">
                                                    <div class="d-flex d-flex align-items-center mb-3 mt-3">
                                                        <button type="button" onclick="removeItem(this);" id="remove-1" class="btn btn-danger"><i class="fas fa-minus"></i></button>
                                                        <input placeholder="Ej: Mantenimiento preventivo a cortadores de TBM" type="text" class="form-control job-responsabilites-list" maxlength="65" aria-describedby="emailHelp">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <input type="text" class="form-control invisible" id="job-responsabilities-json" name="job-responsabilities-json">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="col">
                                            <h5 class="card-title"><i class="fas fa-business-time"></i> Experiencia:</h5>
                                        </div>
                                        <div class="col">
                                            <select name="job-experience" class="form-select" aria-label="Default select example">
                                                <option selected value="Mínimo 1 año">Mínimo 1 año</option>
                                                <option value="2 a 3 años">2 a 3 años</option>
                                                <option value="3 a 5 años">3 a 5 años</option>
                                                <option value="5 años o más">5 años o más</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="col">
                                            <h5 class="card-title"><i class="fas fa-user-graduate"></i> Educación:</h5>
                                        </div>
                                        <div class="col">
                                            <select name="job-education" class="form-select" aria-label="Default select example">
                                                <option selected value="Primaria terminada">Primaria terminada</option>
                                                <option value="Secundaria terminada">Secundaria terminada</option>
                                                <option value="Preparatoria terminada">Preparatoria terminada</option>
                                                <option value="Licenciatura o ingenieria">Licenciatura o ingenieria</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-5 pb-3">
                                    <button onclick="collectJobResponsabilities();" type="button" class="btn btn-warning">
                                        <h4>
                                            <i class="fas fa-bullhorn"></i> Publicar
                                        </h4>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col pb-5 pt-5">
                <div class="row text-center pb-3">
                    <h3>Vacantes activas</h3>
                </div>
                <div class="row justify-content-center">
                    <!-- Job post starts here -->
                    {{ setlocale(LC_ALL, 'Spanish_Mexican') }}
                    @foreach ($existingJobPosts as $record)
                    <div onclick="makeRequest({{ $record->id }});" class="card text-white bg-dark mt-3 mb-3 job-post-card" style="width: 65%;">
                        <div class="card-header">
                            <div class="position-absolute top-0 start-100 translate-middle">
                                <a href="/delete/{{ $record->id }}">
                                    <button type="button" class="btn btn-danger"><i class="fas fa-times"></i></button>
                                </a>
                            </div>
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
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<!-- Sweet alert CDN -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="../js/add-text-input.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<!-- Bootstrap CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>