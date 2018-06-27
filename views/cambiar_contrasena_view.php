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
            	<div class="col-xs-12">
            		<h2 class="center-block">Cambiar Contraseña</h2>
            	</div>
            </div>
            <div class="row">
                <form action="../controllers/cambiar_contrasena_controller.php" method="POST">
                	<div class="form-group">
					    <label for="rut">RUT (Temporal Desarrollo)</label>
					    <input type="text" class="form-control" placeholder="" id="rut" name="rut" required oninput="checkRut(this)">
					</div>
                	<div class="form-group">
					    <label for="oldpass">Contraseña actual</label>
					    <input type="password" class="form-control" id="oldpass" name="oldpass" placeholder="" required>
					</div>
					<div class="form-group">
					    <label for="newpass">Nueva contraseña</label>
					    <input type="password" class="form-control" id="newpass" name="newpass" placeholder="" required>
					</div>
					<div class="form-group">
					    <label for="newpass2">Repita su nueva contraseña</label>
					    <input type="password" class="form-control" id="newpass2" name="newpass2" placeholder="" required>
					</div>
					
                    <div class="form-group">
                        <input type="submit" id="submit" class="btn btn-primary center-block" value="Cambiar Contraseña" required="">
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
                                echo 'Su contraseña se ha actualizado exitosamente';
                            echo '</div>';
                        }
                        if($_GET['answer']==1){
                            echo '<div class="alert alert-warning" role="alert">';
                                echo '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>';
                                echo '<span class="sr-only">Error: </span>';
                                echo 'Se ha actualizado su contraseña, pero no se ha logrado enviar mail de aviso.';
                            echo '</div>';
                        }
                        if($_GET['answer']==2){
                            echo '<div class="alert alert-danger" role="alert">';
                                echo '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>';
                                echo '<span class="sr-only">Error: </span>';
                                echo 'La actualización de contraseña ha fallado, intentelo nuevamente.';
                            echo '</div>';
                        }
                        if($_GET['answer']==3){
                            echo '<div class="alert alert-danger" role="alert">';
                                echo '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>';
                                echo '<span class="sr-only">Error: </span>';
                                echo 'Las nuevas conraseñas no coinciden, intentelo nuevamente.';
                            echo '</div>';
                        }
                        if($_GET['answer']==4){
                            echo '<div class="alert alert-danger" role="alert">';
                                echo '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>';
                                echo '<span class="sr-only">Error: </span>';
                                echo 'Su contraseña es incorrecta, intentelo nuevamente';
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