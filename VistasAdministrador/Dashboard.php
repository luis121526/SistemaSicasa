<?php 
session_start();
    //Si existe la sesión "cliente"..., la guardamos en una variable.
    if (isset($_SESSION['logueo'])){
        $persona = $_SESSION['logueo'];
    }else{
 header('Location: ../index.php');//Aqui lo redireccionas al lugar que quieras.
     die() ;

    }
    include '../Logica/conectbd.php';

  ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
  <link rel="icon"  href="../img/favicon.ico">
  <link rel="preload" href="../css/bootstrap-grid.min.css" as="styles">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/estilo.css" as="styles">
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<script>
$(document).ready(function(){
  $("body").hide().fadeIn(900);
})
</script>
<body>

  <body>
	<div id="menu">
    <div class="perfil"> 
    <?php
		          $sql="SELECT *FROM usuarios WHERE nombre_usuario='$persona'";
		          $stm=$conexion->query($sql);
		          while ($datos=$stm->fetch_object()) {
		            $imagen = base64_encode($datos->img_perfil);
		      }
       	?>
       	<img  class="perf" src="data:image/jpeg; base64 ,<?php echo $imagen ?> " width="60" height="60" class="img-fluid">
         <div class="a">
          <img class="activo" src="../img/activo.png">
          </div>
          <div class="b">
          <label><?php echo $persona   ?></label>
          </div>
  </div>
    <br>
  <div class="list-group">
  <button type="button" onclick="location.href='../VistasAdministrador/Dashboard.php'" class="list-group-item list-group-item-action ">Dashboard</button>
  <button type="button" class="list-group-item list-group-item-action">Reportes (Incidencias)</button>
  <button type="button" onclick="location.href='../VistasAdministrador/Usuarios.php'" class="list-group-item list-group-item-action">Usuarios</button>
  <button type="button" class="list-group-item list-group-item-action">Estadísticas</button>
  <button type="button" onclick="location.href='../VistasAdministrador/Inventarios.php'"class="list-group-item list-group-item-action">Inventarios</button>
  <button class="btn btn-danger"type="button" onclick="location.href='../Logica/cerrar.php'" class="list-group-item list-group-item-action ">Cerrar Sesion</button>

</div>
	</div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

</body>
</html>