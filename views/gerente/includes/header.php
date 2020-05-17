<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=URL?>public/css/styleregistrar.css" />
    <script src="https://kit.fontawesome.com/e43617e4d2.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mt-2">
            <a class="navbar-brand" href="<?=URL?>">App Brand</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=URL?>home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=URL?>home/registrar">Registrar Persona</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=URL?>home/logout">Cerrar Sesión</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    Micro-Framework basado en la arquitectura MVC
                </span>
            </div>
        </nav>
    </div>
    <br>
    <hr>
    <br>