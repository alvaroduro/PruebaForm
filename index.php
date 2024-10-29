<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Formulario</title>
    <!--Hoja estilos CSS-->
    <link rel="stylesheet" href="estilos.css">
    <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!--Estilo Fuente Google Fonts Roboto-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
</head>

<body>
    <h1 class="text-center my-3">Ejercicios Formularios</h1>
    <!------------Nav------------>
    <div class="container my-5">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Formulario 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Formulario 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Formulario 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </div>
    <div class="container d-flex ">
        <div class="imagen w-50">
        <img class="img-fluid imagenInicio" src="img/form.jpg" alt="imagen php">
        </div>
        <div class="textoImagen w-50 text-center alig-items center">
        <p>Ejercicios con formulario resueltos para el TEMA 1 de la asignatura Desarrollo Web Entorno Servidor</p>
        <p><b>Corresponde al curso FP Semipresencial de DAW</b></p>
        </div>
        
    </div>
    <div class="container-fluid w-100 my-3 contenedorFooter">
        <footer class="d-flex footer">
            <p>Álvaro Durán Amador</p>
            <a class="mx-2" href="https://www.instagram.com/?hl=es"><img src="img/instagram.png" alt="insta" width="20px" height="20px"></a>
            <a class="mx-2" href="https://x.com/home?lang=es"><img src="img/x.png" alt="x" width="20px" height="20px"></a>
        </footer>
    </div>
</body>
</html>