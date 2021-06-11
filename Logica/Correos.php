<?php
$info1=$_POST['departamento'];
$info2=$_POST['nombre'];
$info3=$_POST['correo'];
$info4=$_POST['empresa'];
$info5=$_POST['telefono'];
$info6=$_POST['asunto'];
$info7=$_POST['problema'];
$info11=mb_strtolower($info1,'utf-8');
$info12=mb_strtolower($info2,'utf-8');
$info13=mb_strtolower($info3,'utf-8');
$info14=mb_strtolower($info4,'utf-8');
$info15=mb_strtolower($info5,'utf-8');
$info16=mb_strtolower($info6,'utf-8');
$info17=mb_strtolower($info7,'utf-8');

if(empty($info11)||empty($info12)||empty($info13)||empty($info14)||
empty($info15)||empty($info16)||empty($info17)){
echo "<script>
alert('Estás dejando campos vacios, corrobora tu información');
location.href='../VistasUsuariosAlmacen/Ticket_Servicio.php';
</script>";
}
else{
   // date_default_timezone_set('America/Mexico_City');
    include '../Logica/conectbd.php';
   // $q=mysqli_query($conexion,"INSERT INTO tickets (id_reporte, fecha) VALUES (NULL,CURTIME())");
    $insercion=mysqli_query($conexion,"INSERT INTO tickets (id_reporte,departamento,nombre,correo,
    empresa,telefono,asunto,problema,fecha) VALUES(NULL,'$info11','$info12',
    '$info13','$info14','$info15','$info16','$info17',CURTIME())");
    if(!$insercion){
        echo "<script>
        alert('Tu petición no pudo ser procesada, intentalo nuevamente');
        location.href='../VistasUsuariosAlmacen/Ticket_Servicio.php';
        </script>";
        $para=$info3;
        $titulo='Correo Prueba';
        $mensaje='Estamos Atendiendo Tu solicitud';
        mail($para,$titulo,$mensaje);
    }
    else{
     echo "<script>
     alert('Ticket De Servicio Generado Exitosamente, Tu petición será atendida a la mayor brevedad posible');
     location.href='../VistasUsuariosAlmacen/Ticket_Servicio.php';
     </script>";
    }
}



?>