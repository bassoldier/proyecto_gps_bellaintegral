<!DOCTYPE>
<html>
<head>
	<title>Control Directivo</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4" id="container-recuperar-contrasena">
            <div class="row">
                <p class="navbar-text">Ingrese su RUT para verificar su cuenta</p>
            </div>
            <div class="row">
                <form action="../controllers/recuperar_contrasena_controller.php" method="POST">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="RUT" id="rut" name="rut" required>
                        <span class="input-group-btn">
                            <input type="submit" id="submit" class="btn btn-primary" value="Verificar">
                        </span>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="alert alert-danger hide" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only">Error:</span>
                    Su rut no se encuentra registrado, vuelva a intentarlo.
                </div>
            </div>
        </div>
    </div>
</div>



<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>

</html>