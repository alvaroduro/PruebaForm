<!--BODY-->
<div class="encabezado">
    <h1 class="text-center my-1 mx-5">EJERCICIO 1 - FORMULARIO 2</h1>
    <img class="my-1 mx-5" src="../../img/fotoPHP.png" alt="formulariophp" width="200px" height="100px">
</div>

<!------------Nav------------>
<div class="container my-5">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../formulario1/index.php">Formulario 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../formulario2/index.php">Formulario 2</a>
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
<!--------FORMULARIO-------->
<div class="container">
    <form action="" method="POST" enctype="multipart/form-data" class="border w-50 p-3 bg-primary-subtle">
        <!--Campos-->

        <!------Numero Expediente------>
        <label for="expediente" class="form-label"><b>Número Expediente:</b></label>
        <input type="text" name="expediente" id="expediente" class="form-control"><br>

        <!------NIF------>
        <label for="nif" class="form-label"><b>NIF:</b></label>
        <input type="text" name="nif" id="nif" class="form-control"><br>

        <!------Nombre------>
        <label for="nombre" class="form-label"><b>Nombre:</b></label>
        <input type="text" name="nombre" id="nombre" class="form-control"><br>

        <!------Apellidos------>
        <label for="apellidos" class="form-label"><b>Apellidos:</b></label>
        <input type="text" name="apellidos" id="apellidos" class="form-control"><br>

        <!------Contraseña------>
        <label for="password" class="form-label"><b>Contraseña</b></label>
        <input type="password" name="password" id="password" class="form-control"><br>

        <!------Email------>
        <label for="email" class="form-label"><b>Email:</b></label>
        <input type="email" name="email" id="email" class="form-control"><br>

        <!------Teléfono Móvil------>
        <label for="movil" class="form-label"><b>Móvil:</b></label>
        <input type="number" name="movil" id="movil" class="form-control"><br>

        <!------Biografía------>
        <label for="biografia" class="form-label"><b>Biografía:</b></label>
        <textarea name="biografia" id="biografia" cols="30" rows="5" class="form-control"></textarea><br>

        <!------Imagen------>
        <label for="imagen" class="form-label"><b>Imagen</b></label>
        <input type="file" name="imagen" id="imagen" class="form-control"><br>

        <!------Beca------>
        <!--SI-->
        <label for="imagen" class="form-label"><b>Beca:</b></label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="beca" id="becaSi">
            <label class="form-check-label" for="becaSi">
                SI
            </label><br>
        </div>
        <!--NO-->
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="beca" id="becaNo">
            <label class="form-check-label" for="becaNo">
                NO
            </label><br>
        </div><br><br>

        <!--ROL-->
        <label for="rol">Rol:
            <select name="rol" class="form-control">
                <option value="0">Cliente</option>
                <option value="1">Administrador</option>
            </select>
        </label>
        <br/><br/>

        <!------Enviar------>
        <button type="submit" class="btn btn-primary">Enviar Información</button>
    </form>
</div>