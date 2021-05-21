<?php 
session_start();
 include '../Logica/conectbd.php';
$persona=$_SESSION['logueo'];
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
<!--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">-->
<!--<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>-->
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
</div>
	</div>
	<div class="mitabla">
 <table id="tablai" class="table table">
      <h6 class="text-center">Usuarios Registrados </h6>
          <thead>
          	<tr>
          		 <?php
      $query4=mysqli_query($conexion,"SHOW COLUMNS FROM usuarios FROM mibd");
      while($fila0=mysqli_fetch_row($query4)){ 
             echo "<th>$fila0[0]</th>";
		      }
		  ?>
		</tr>
    </thead>
    <?php
      $query4=mysqli_query($conexion,"SELECT * FROM usuarios");
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
            <td><?php echo $fila['id_reporte'] ?></td>
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