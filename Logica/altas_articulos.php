<?php
  include '../Logica/conectbd.php';
  $val1=$_POST['articulo'];
  $val2=$_POST['descripcion'];
  $val3=$_POST['cantidad'];
  $valu1=mb_strtolower($val1,'utf-8');
  $valu2=mb_strtolower($val2,'utf-8');
  $valu3=mb_strtolower($val3,'utf-8');
  if(empty($val1)||empty($val2) || empty($val3)){
    echo "<script>
    alert('No puedes dejar campos vacios');
    location.href='../VistasUsuariosAlmacen/Inventario.php';
    </script>";
  }else{
  /*$val4=$_POST['contra'];
  $val5=$_POST['departamento'];
  $val6=$_POST['puesto']; 
  $val7=$_POST['imagen'];*/
  $inserta_articulos=mysqli_query($conexion,"INSERT INTO inventarios (articulo,descripcion,total)
   VALUES ('$valu1', '$valu2','$valu3' );");
  if(!$inserta_articulos){
      echo "fallo";
  }
}
  ?>