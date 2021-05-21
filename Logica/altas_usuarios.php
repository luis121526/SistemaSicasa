<?php
/*
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
  </div>*/
  include '../Logica/conectbd.php';
  $val1=$_POST['nombre'];
  $val2=$_POST['apellido'];
  $val3=$_POST['usuario'];
  $val4=$_POST['contra'];
  $val5=$_POST['departamento'];
  $val6=$_POST['puesto']; 
  $val7=$_POST['imagen'];
  $inserta_usuarios=mysqli_query($conexion,"INSERT INTO usuarios (id, nombre, apellido, nombre_usuario, contra,departamento, id_cargo, id_reporte, img_perfil)
   VALUES (NULL, '$val1', '$val2', '$val3', '$val4', '$val5', '$val6', NULL,'$val7' );");
  if(!$inserta_usuarios){
      echo "fallo";
  }
  ?>