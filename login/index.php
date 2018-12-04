<?php
require_once("./php/myDBC.php");
if(isset($_SESSION['sesion']))
{
	header("location:principal.php");
	exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Sistemas de Información</title>
	<meta charset="utf-8">
	<link type="text/css" href="./css/style.css" rel="stylesheet" />
</head>

<body>
	
	<div id="Ingresa">
          	<a href="./php/registro.php"</a>Registro</a>
    </div> <!-- fin opcion-->
    
	<div id="envoltura">
		<div id="contenedor">
	
			<div id="cabecera" >
				<img src="./css/fotos/loquito.jpg">
			</div>
	
			<div id="cuerpo">
				<form id="form-login" acción="./php/login.php" method="post" autocomplete="off">
					<!--A saber, el atributo for funciona como el id.-->
					<!--ejemplo <label for="usuario">Usuario:</label>-->
					<!--required es nuevo en html5, si el campo está vacío te avisa, pero cuidado, no valida la información-->
					<p><label >:</label></p>
						<input nombre="Florencia Julian Yescas" type="texto" id="flor" placeholder="Ingresa nombre" autofocus="" required=""></p>
					
					<p><label>password:</label></p>
						<input nombre="flor" type="texto" id="contraseña" placeholder="Ingresa contraseña" required=""></p>
					
					<p id="bot"><input type="submit" id="submit" nombre="usuario" value="registro" class="botón"></p>
				</form>
			</div><!--fin cuerpo-->
	
			<div id="pie">INFTEC</div>
		</div><!-- fin contenedor -->

	</div><!--fin envoltura-->
	
</body>

</html>
