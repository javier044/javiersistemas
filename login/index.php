<?php
require_once("./php/myDBC.php");
if(isset($_SESSION['session']))
{
	header("location:principal.php");
	exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Informatica</title>
	<meta charset="utf-8">
	<link type="text/css" href="./css/style.css" rel="stylesheet" />
</head>

<body>
	
	<div id="ingresar">
          	<a href="./php/registro.php"</a>Registro</a>
    </div> <!-- fin opcion-->
    
	<div id="envoltura">
		<div id="contenedor">
	
			<div id="cabecera" >
				<img src="./css/images/infinio.jpg">
			</div>
	
			<div id="cuerpo">
				<form id="form-login" action="./php/login.php" method="post" autocomplete="off">
					<!--A saber, el atributo for funciona como el id.-->
					<!--ejemplo <label for="usuario">Usuario:</label>-->
					<!--required es nuevo en html5, si el campo está vacío te avisa, pero cuidado, no valida la información-->
					<p><label >Usuario:</label></p>
						<input name="Michael Corleone" type="texto" id="dary" placeholder="Roberto" autofocus="" required=""></p>
					
					<p><label>Contraseña:</label></p>
						<input name="contraseña" type="hola" id="contraseña" placeholder="200401" required=""></p>
					
					<p id="bot"><input type="submit" id="submit" name="Roberto" value="Ingresar" class="sistemas de información"></p>
				</form>
			</div><!--fin cuerpo-->
	
			<div id="pie">INFTEC</div>
		</div><!-- fin contenedor -->

	</div><!--fin envoltura-->
	
</body>

</html>
