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
	<title>Dashboard</title>
  <link rel="icon"  href="../img/favicon.ico">
  <link rel="preload" href="../css/bootstrap.min.css" as="styles">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <script src="../js/jquer.min.js"></script>
  <link rel="preload" href="../Datatables/datatables.min.css" as="styles">
  <link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css"/>
  <script type="text/javascript" src="../DataTables/datatables.min.js"></script>
  <link rel="preload" href="../css/estilo.css" as="styles">
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
  <button type="button" onclick="location.href='../VistasUsuarios/Dashboard.php'" class="list-group-item list-group-item-action ">Dashboard</button>
  <button type="button" onclick="location.href='../VistasUsuarios/Dashboard.php'" class="list-group-item list-group-item-action ">Generar Nuevo Ticket</button>
  <button class="btn btn-danger" type="button" onclick="location.href='../Logica/cerrar.php'" class="list-group-item list-group-item-action ">Cerrar Sesion</button>

</div>

	</div>

  <!--aqui termina el menu-->
  <!--inicia ticket-->
  <div id="ticket">
  <div class="anuncio">
 <label class="text-center">Generar Nuevo Ticket</label>
  </div>
  <br>
  <form method="POST" action="https://www.google.com">
  <div class="row g-3 align-items-center">
  <div class="col-2">
    <label for="inputPassword6" class="col-form-label">Fecha</label>
  </div>
  <div class="col-auto">
    <input type="date" name="fecha" class="form-control" aria-describedby="passwordHelpInline">
  </div>
 
</div>
<div class="row g-3 align-items-center">
  <div class="col-2">
    <label for="inputPassword6" class="col-form-label">Nombre</label>
  </div>
  <div class="col-auto">
    <input type="text" name="nombre" class="form-control" aria-describedby="passwordHelpInline">
  </div>
 
</div>
<div class="row g-3 align-items-center">
  <div class="col-2">
    <label for="inputPassword6" class="col-form-label">Correo</label>
  </div>
  <div class="col-auto">
    <input type="text" name="correo" class="form-control" aria-describedby="passwordHelpInline">
  </div>
 
</div>
<div class="row g-3 align-items-center">
  <div class="col-2">
    <label for="inputPassword6" class="col-form-label">Departamento</label>
  </div>
  <div class="col-auto">
    <input type="text" name="depa" class="form-control" aria-describedby="passwordHelpInline">
  </div>
 
</div>
<div class="row g-3 align-items-center">
  <div class="col-2">
    <label for="inputPassword6" class="col-form-label">Asunto</label>
  </div>
  <div class="col-auto">
    <input type="text" name="asunto" class="form-control" aria-describedby="passwordHelpInline">
  </div>
 
</div>
<div class="row g-3 align-items-center">
  <div class="col-2">
    <label for="inputPassword6" class="col-form-label">Descripcion Problema</label>
  </div>
  <div class="col-8">
  <textarea class="form-control" name="problema" form="usrform"></textarea>  </div>
 
</div>
<div class="row g-3 align-items-center">
  <div class="col-5">
  <input type="submit" class="btn btn-success" name="enviar"  value="Abrir Ticket">  </div>
</div>
</form>
   </div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

</body>
</html>