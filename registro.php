<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap1/css/bootstrap.css">
    <script src="librerias/jquery-3.2.1.min.js"></script>
</head>
<body style="background-color: gray;">
    <div class="container" style="margin-top: 75px;">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="panel panel-danger">
                    <div class="panel panel-heading">Registrar Administrador</div>
                    <div class="panel panel-body">
                        <form id="frnRegistro">
                            <label>Nombre</label>
                            <input type="text" class="form-control input-sm" id="nombre" name="nombre">

                            <label>Apellido</label>
                            <input type="text" class="form-control input-sm" id="apellido" name="apellido">

                            <label>Usuario</label>
                            <input type="text" class="form-control input-sm" id="usuario" name="usuario">

                            <label>Contraseña</label>
                            <input type="text" class="form-control input-sm" id="password" name="password">
                            <p></p>
                            <span class="btn btn-primary">Registrar</span>
                            <a href="index.php" class="btn btn-default">Regresar Login</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>
</html>