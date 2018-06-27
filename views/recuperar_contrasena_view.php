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
                        <input type="text" class="form-control" placeholder="RUT" id="rut" name="rut" required oninput="checkRut(this)">
                        <span class="input-group-btn">
                            <input type="submit" id="submit" class="btn btn-primary" value="Verificar">
                        </span>
                    </div>
                </form>
            </div>
            <div class="row">
                <?php
                    if(isset($_GET['answer'])){
                        if($_GET['answer']==0){
                            echo '<div class="alert alert-success" role="alert">';
                                echo '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>';
                                echo '<span class="sr-only">Error: </span>';
                                echo 'Su nueva contraseña ha sido enviada a su correo.';
                            echo '</div>';
                        }
                        if($_GET['answer']==1){
                            echo '<div class="alert alert-danger" role="alert">';
                                echo '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>';
                                echo '<span class="sr-only">Error: </span>';
                                echo 'No se ha logrado enviar su contraseña, contáctese con el administrador.';
                            echo '</div>';
                        }
                        if($_GET['answer']==2){ 
                            echo '<div class="alert alert-danger" role="alert">';
                                echo '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>';
                                echo '<span class="sr-only">Error: </span>';
                                echo 'Su rut no se encuentra registrado';
                            echo '</div>';
                        }
                        if($_GET['answer']==3){ 
                            echo '<div class="alert alert-danger" role="alert">';
                                echo '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>';
                                echo '<span class="sr-only">Error: </span>';
                                echo 'No se ha logrado recuperar su contraseña, intentelo nuevamente';
                            echo '</div>';
                        }
                    }
                ?> 
            </div>
        </div>
    </div>
</div>



<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="../js/functions.js"></script>

</body>

</html>