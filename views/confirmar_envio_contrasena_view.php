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
                <p class="navbar-text">Se enviará una nueva contraseña al correo: <?php echo $datos[0]['p_correo']; ?></p>
            </div>
            <div class="row">
                <div class="col-xs-offset-4 col-xs-4 center-block">
                    <a href="" class="btn btn-primary">Enviar</a>
                </div>    
            </div>
        </div>
    </div>
</div>



<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>

</html>