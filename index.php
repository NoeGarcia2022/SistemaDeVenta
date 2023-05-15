<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuario</title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap1/css/bootstrap.css">
    <script src="librerias/jquery-3.2.1.min.js"></script>
</head>
<body style="background-color: gray;">
    <div class="container" style="margin-top: 75px;">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">Sistema de ventas y almacen</div>
                    <div class="panel panel-body">
                        <p>
                            <img src="img/compra.png" alt="" srcset="" height="190">
                        </p>
                        <form id="frnLogin">
                            <label>Usuario</label>
                            <input type="text" class="form-control input-sm" name="usuario" id="usuario">
                            <label>Contraseña</label>
                            <input type="password" class="form-control input-sm" name="password" id="password">
                            <p></p>
                            <span class="btn btn-primary btn-sm">Entrar</span>
                            <a href="registro.php" class="btn btn-danger btn-sm">Registrar</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>

    </div>

</body>
</html>