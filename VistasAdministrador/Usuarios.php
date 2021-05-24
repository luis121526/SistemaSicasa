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
	<title>Usuarios</title>
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
  <button type="button" onclick="location.href='../VistasAdministrador/Inventarios.php'" class="list-group-item list-group-item-action">Inventarios</button>
  <button class="btn btn-danger"type="button" onclick="location.href='../Logica/cerrar.php'" class="list-group-item list-group-item-action ">Cerrar Sesion</button>

</div>
	</div>
	<div class="mitabla">
 <table id="tablai" class="table table">
      <h6 class="text-center">Usuarios Registrados </h6>
          <thead>
          <tr>
          <th>id</th>
          <th>nombre</th>
          <th>apellido</th>
          <th>nombre_usuario</th>
          <th>contraseña</th>
          <th>departamento</th>
          <th>id_cargo</th>
          <th>img_perfil</th>
          </tr>
     </thead>
    <?php
      $query4=mysqli_query($conexion,"SELECT id,nombre,apellido,nombre_usuario,contra,departamento,id_cargo,img_perfil FROM usuarios");
      while($fila=mysqli_fetch_assoc($query4)){ 
      ?>
    <tbody>
        <tr>
            <td><?php echo $fila['id']
            //hola mundo ?></td>
            <td><?php echo $fila['nombre'] ?></td>
            <td><?php echo $fila['apellido'] ?></td>
            <td><?php echo $fila['nombre_usuario'] ?></td>
            <td><?php echo $fila['contra'] ?></td>
            <td><?php echo $fila['departamento'] ?></td>
            <td><?php echo $fila['id_cargo'] ?></td>
            <td>
              
            <img width="65" height="65" src="data:<?php echo $fila[8]; ?>;base64,<?php echo  base64_encode($fila['img_perfil']); ?>"> 
            </td> 
        </tr>
    </tbody>
    <?php
  }
  ?>
</table>
</div>
<div class="crud">
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#agregar">Agregar</button>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modificar">Modificar</button>
<button class="btn btn-danger"> Eliminar</button>

</div>



<!-- Modal agregar -->
<div id="agregar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal  agregar  contenido-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Registro de nuevo usuario</h4>
      </div>
      <div class="modal-body">
      <form method="POST" action="../Logica/altas_usuarios.php">
  <div class="mb-3">
    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" name="apellido" placeholder="Apellido">
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" name="usuario" placeholder="Nombre Usuario">
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" name="contra" placeholder="Contraseña">
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" name="departamento" placeholder="Departamento">
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" name="puesto" placeholder="Cargo">
  </div>
  <div class="mb-3">
    <label class="text-center">Imagen De Perfil</label>
    <input type="file" class="form-control" name="imagen" placeholder="img_perfil">
  </div>
  <button type="submit" class="btn btn-success">Registrar</button>

</form>
      </div>
    </div>

  </div>
</div>


<!-- Modal modificar -->
<div id="modificar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal  agregar  contenido-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificación De Datos</h4>
      </div>
      <div class="modal-body">
      <form method="POST" action="../Logica/altas_usuarios.php">
  <div class="mb-3">
    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" name="apellido" placeholder="Apellido">
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" name="usuario" placeholder="Nombre Usuario">
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" name="contra" placeholder="Contraseña">
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" name="departamento" placeholder="Departamento">
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" name="puesto" placeholder="Cargo">
  </div>
  <div class="mb-3">
    <label class="text-center">Imagen De Perfil</label>
    <input type="file" class="form-control" name="imagen" placeholder="img_perfil">
  </div>
  <button type="submit" class="btn btn-warning">Modificar</button>

</form>
      </div>
    </div>

  </div>
</div>

</body>
<!--<script src="https://code.jquery.com/jquery-3.3.1.js"></script>-->
<!--<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>-->
<script >
 $(document).ready( function () {

    $('#tablai').DataTable({
       responsive: true,
             language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
    });
  });
</script>
</html>    