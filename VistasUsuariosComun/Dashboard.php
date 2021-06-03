<?php   
session_start();
$usuario=$_SESSION['logueo'];
if (!$usuario){
    header("location:../index.php");
}
else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="../css/bootstrap.min.css" as="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="preload" href="../css/estilo.css" as="stylesheet">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Dashboard</title>
</head>
<header>
    
    <nav class="perfil_empresa">
     <div class="row container-fluid">  
    <div class="contenedor1 col-9">
    <span >CorpoSupport</span>
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-warehouse" width="28" height="28" viewBox="0 0 24 24" stroke-width="2.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
    <path d="M3 21v-13l9 -4l9 4v13" />
    <path d="M13 13h4v8h-10v-6h6" />
    <path d="M13 21v-9a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v3" />
    </svg>
    </div>

    <div class="contenedor3 col text-center">
       <!-- <a href="../Logica/cerrar.php">adios</a>-->
       <span><?php echo "Hola $usuario" ?></span>
    <span>
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="32" height="32" viewBox="0 0 24 24" stroke-width="2.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <circle cx="12" cy="7" r="4" />
        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
        </svg>
    </span>
       
       <button name="boton" type="submit" class="btn-group-sm btn btn-danger" onclick="location.href='../index.php'">
       <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-power" width="17" height="17" viewBox="0 0 24 24" stroke-width="2.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M7 6a7.75 7.75 0 1 0 10 0" />
        <line x1="12" y1="4" x2="12" y2="12" />
        </svg>
       <span class="cerrar">Cerrar Sesion<span>
       </button>
      
    </div>

</div>
    </nav>
</header>
<body>
    
</body>
</html>
<?php
}
?>