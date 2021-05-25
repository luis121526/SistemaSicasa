<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon"  href="img/favicon.ico">
	<link rel="preload" href="css/bootstrap.min.css" as="styles">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
	<link rel="preload" href="css/estilo.css" as="styles">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script src="js/jquer.min.js"></script>
</head>
<script>
$(document).ready(function(){
  $("body").hide().fadeIn(900);
})
</script>
<body>
	<div id="contenedor1">
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
	<!--hgg-->

</body>
</html>