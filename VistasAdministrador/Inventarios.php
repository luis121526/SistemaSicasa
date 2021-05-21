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
	<title>Inventarios</title>
  
</head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
<script src="../js/jquer.min.js"></script>
<link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css"/>
<script type="text/javascript" src="../DataTables/datatables.min.js"></script>
<script>
$(document).ready(function(){
  $("body").hide().fadeIn(900);
})
</script>
<body>
	<div id="menu">
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
      <h6 class="text-center">Vista Stock </h6>
          <thead>
          	<tr>
          		 <?php
      $query4=mysqli_query($conexion,"SHOW COLUMNS FROM inventarios FROM mibd");
      while($fila0=mysqli_fetch_row($query4)){ 
             echo "<th>$fila0[0]</th>";
		      }
		  ?>
		</tr>
    </thead>
    <?php
      $query4=mysqli_query($conexion,"SELECT * FROM inventarios");
      while($fila=mysqli_fetch_row($query4)){ 
      ?>
    <tbody>
        <tr>
            <td><?php echo $fila[0] ?></td>
            <td><?php echo $fila[1] ?></td>
            <td><?php echo $fila[2] ?></td>
            <td><?php echo $fila[3] ?></td>
            <td><?php echo $fila[4] ?></td>
            <td><?php echo $fila[5] ?></td>
            <td><?php echo $fila[6] ?></td>

        </tr>
    </tbody>
    <?php
  }
  ?>
</table>
</div>
<div class="crud">
<button class="btn btn-success"> Agregar</button>
<button class="btn btn-warning"> Modificar</button>
<button class="btn btn-danger"> Eliminar</button>

</div>

</body>
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