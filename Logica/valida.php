<?php
session_start();
include '../Logica/conectbd.php';
$var1=mysqli_real_escape_string($conexion,$_POST['user']);
$var2=mysqli_real_escape_string($conexion,$_POST['pass']);
$query1=mysqli_query($conexion,"SELECT *FROM usuarios WHERE nombre_usuario='$var1' AND contra='$var2'");
if (empty($var1)||empty($var2)){
	echo "<script>
	alert('No se puede dejar campo vacio,asegurate de rellenar los campos');
	location.href='../index.php';
	</script>";
}
else{
$array=mysqli_fetch_array($query1);
if($array['id_cargo']==1){
$_SESSION['logueo']=$var1;
header("Location:../VistasAdministrador/Dashboard.php");
}
else
if($array['id_cargo']==2){
	$_SESSION['logueo']=$var1;
	header("Location:../VistasUsuarios/Dashboard.php");}
else{
	echo "<script>
	alert('No puedes acceder');
	location.href='../index.php';
	</script>";
}}
?>