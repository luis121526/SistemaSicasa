<?php
$host="localhost";
$usuario="root";
$contrasena="";
$database="mibd";
$conexion=mysqli_connect($host,$usuario,$contrasena,$database);
if(!$conexion){
	echo "<script>
	alerty('Ocurrió un error al intentar conectar a la base de datos'):
	</script>";
}
?>