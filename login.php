<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ferrex</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <script src="js/jquery.min.js"></script>

</head>
<body style="background-color: orange;">

    <div class="container">

        <div class="row">

            <div align="center" class="offset-3 col-6" style="margin-top: 200px">

                <form action="controladores/validar.php" method="POST">

                    <div>
                        <img src="img/Ferrex.jpeg" width="90%" height="90%">
                    </div>

                    <h2>Iniciar Sesión</h2>
                    <label class="texto">Usuario</label>

                    <input type="text" name="nombre_usuario" class="form-control">
                    <label class="texto">Contraseña</label>

                    <input type="text" name="clave" class="form-control">
                    <br>

                    <input class="theme-primary btn-solid" type="submit" value="Comenzar">

                </form>

            </div>

        </div>

    </div>

</body>
</html>