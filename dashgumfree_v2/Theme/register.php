<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Registro de Nuevo Usuario</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

	<script type="text/javascript">
        function alertaConEstilo() {
        	var unique_id = $.gritter.add({
	            // (string | mandatory) the heading of the notification
	            title: 'Sistemas de Notificaciones ICE!',
	            // (string | mandatory) the text inside the notification
	            text: 'Las contraseñas ingresadas no coinciden <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
	            // (string | optional) the image to display on the left
	            image: 'assets/img/ui-sam.jpg',
	            // (bool | optional) if you want it to fade out on its own or just sit there
	            sticky: true,
	            // (int | optional) the time you want it to be alive for before fading out
	            time: '',
	            // (string | optional) the class name you want to apply to that specific message
	            class_name: 'my-sticky-class'
        	});

        	return false;
        }
	</script>
	

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">

	  		<?php
	  			include('php/usuario.php');

	  			if (isset($_POST['registrarUsuario'])) {
	  				$pass1 = $_POST['pass1'];
	  				$pass2 = $_POST['pass2'];
	  				if ($pass1 == $pass2) {
	  					$usuario = $_POST['usuario'];
	  					$nombre = $_POST['nombre'];
	  					$apellido = $_POST['apellido'];
	  					$telefono = $_POST['telefono'];
	  					$correo = $_POST['correo'];

	  					$user = new Usuario($usuario, $pass1, $nombre, $apellido, $telefono, $correo);
	  					$respuestaRegistro = $user->registrarUsuario();

	  					unset($_POST);
	  					$_POST = array();

	  					if ($respuestaRegistro == 0) {
	  						header("Location: login.html");
	  					}
	  				}
	  			}
	  		?>	
	  	
		      <form class="form-login" action="" method="post" onsubmit="return validarPass(this)">
		        <h2 class="form-login-heading">Registrate</h2>
		        <div class="login-wrap">
		            <input type="text" name="usuario" class="form-control" placeholder="Usuario" autofocus required>
		            <br>
		            <input type="password" name="pass1" id="pass1" class="form-control" placeholder="Password" required>
		            <br>
		            <input type="password" name="pass2" id="pass2" class="form-control" placeholder="Repite el Password" required>
		            <br>
		            <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus required>
		            <br>
		            <input type="text" name="apellido" class="form-control" placeholder="Apellido" autofocus required>
		            <br>
		            <input type="text" name="telefono" class="form-control" placeholder="Telefono" autofocus required>
		            <br>
		            <input type="email" name="correo" class="form-control" placeholder="Correo" autofocus id="exampleInputEmail2" required>
		     

		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#"> ¿Tienes cuenta? Accede aqui</a>
		
		                </span>
		            </label>
		            <button class="btn btn-theme btn-block" type="submit" name="registrarUsuario"><i class="fa fa-lock"></i> Registrar</button>
		            <!--
		            <hr>
		            
		            <div class="login-social-link centered">
		            <p>or you can sign in via your social network</p>
		                <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
		                <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
		            </div>
		            -->
		            <!--
		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="#">
		                    Create an account
		                </a>
		            </div>
		            -->
		
		        </div>
		
		          <!-- Modal -->
		          
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Sistema de Notificacion ICE</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Las claves ingresadas no coinciden.</p>
		                          <!--
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
								  -->
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <!--
		                          <button class="btn btn-theme" type="button">Submit</button>
		                          -->
		                      </div>
		                  </div>
		              </div>
		          </div>
		         
		          <!-- modal -->
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>
    <script type="text/javascript" src="js/register.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
