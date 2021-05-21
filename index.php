<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="icon"  href="img/favicon.ico">
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<body>	<div id="contenedor1">
			<!--hola-->
			<!--hs-->
		<form method="POST" action="Logica/valida.php">
			<div class="logo">
			<div class="text-center">
			  <img src="Img/LogoSicasa.png" class="img-fluid" alt="Logotipo">
			</div>
			</div>
			<div class="form-group">
		    <input type="text" class="form-control" name="user" aria-describedby="emailHelp" placeholder="Usuario">
		  </div>
		  <br>
		  <div class="form-group">
		    <input type="password" class="form-control" name="pass" placeholder="Contraseña">
		  </div>
		  <br>
		  <button type="submit" class="btn btn-success">Accesar</button>
		</form>
	</div>

</body>
</html>