<?php   
session_start();
$usuario=$_SESSION['logueo'];
if (!$usuario){
    header("location:../index.php");
}
else{
    include '../Logica/conectbd.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="../css/normalize.css" as="stylesheet">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="preload" href="../css/bootstrap.min.css" as="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="preload" href="../css/estilo.css" as="stylesheet">
    <link rel="stylesheet" href="../css/estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.js"/>
    <script type="text/javascript" src="../DataTables/datatables.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
        <script>
            $(document).ready(function(){
            $("body").hide().fadeIn(900);
            })
            </script>
        <main>
               <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, perferendis? Esse, fugiat animi? Eligendi maiores officiis, animi voluptatem illo odit hic. Temporibus omnis itaque laudantium repellendus hic unde voluptate quas.</p>
                -->
                <div class="row container-fluid">
                    
                <section class="barra col-2">
                    <hr>
                        <div>
                        <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dashboard" width="36" height="36" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="12" cy="13" r="2" />
                        <line x1="13.45" y1="11.55" x2="15.5" y2="9.5" />
                        <path d="M6.4 20a9 9 0 1 1 11.2 0z" />
                        </svg>
                        </span>
                        <button class="btn btn-info btn-m" onclick="location.href='../VistasUsuariosAlmacen/Dashboard.php'">Dashboard</button>
                        </div>
                        <hr>
                        <div>
                        <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-ticket" width="36" height="36" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <line x1="15" y1="5" x2="15" y2="7" />
                        <line x1="15" y1="11" x2="15" y2="13" />
                        <line x1="15" y1="17" x2="15" y2="19" />
                        <path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" />
                        </svg>
                        </span>
                        <button class="btn btn-info btn-sm" onclick="location.href='../VistasUsuariosAlmacen/Ticket_Servicio.php'">Ticket Servicio</button>
                        </div>
                        <hr>
                        <div>
                        <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clipboard-list" width="36" height="36" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                        <rect x="9" y="3" width="6" height="4" rx="2" />
                        <line x1="9" y1="12" x2="9.01" y2="12" />
                        <line x1="13" y1="12" x2="15" y2="12" />
                        <line x1="9" y1="16" x2="9.01" y2="16" />
                        <line x1="13" y1="16" x2="15" y2="16" />
                        </svg>
                        </span>
                        <button class="btn btn-info btn-sm" onclick="location.href='../VistasUsuariosAlmacen/Inventario.php'">Inventarios</button>
                        </div>
                        <hr>
                        <div>
                        <button name="boton" type="submit" class="btn-group-sm btn btn-danger" onclick="location.href='../index.php'">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-power" width="17" height="17" viewBox="0 0 24 24" stroke-width="2.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M7 6a7.75 7.75 0 1 0 10 0" />
                            <line x1="12" y1="4" x2="12" y2="12" />
                            </svg>
                        <span class="cerrar">Cerrar Sesion<span>
                        </button>
                        </div>
                       <hr>
                       
                </section>
                <section class="col">
                    <h3 class="text-center">Inventario General En Almacen  #NombreAlmacen</h3>
                    <hr>
             <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Articulo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Stock Inicial</th>
                        <th scope="col">Entradas</th>
                        <th scope="col">Salidas</th>
                        <th scope="col">Stock Total</th>
                        <th scope="col">Accion</th>
                        <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <?php
                    $consulta1=mysqli_query($conexion,"SELECT *FROM inventarios");
                    while($fila=mysqli_fetch_assoc($consulta1)){
                    ?>
                    <tbody>
                        <tr>
                        <td><?php echo $fila['codigo'] ?></td>
                        <td><?php echo $fila['articulo'] ?></td>
                        <td><?php echo $fila['descripcion'] ?></td>
                        <td><?php echo $fila['stock_ini'] ?></td>
                        <td><?php echo $fila['entradas'] ?></td>
                        <td><?php echo $fila['salidas'] ?></td>
                        <td><?php echo $fila['total'] ?></td>
                        <td><button class="btn btn-warning">Modificar</button></td>
                        <td><button class="btn btn-danger">Eliminar</button></td>
                        </tr>
                        
                    </tbody>
                    
                    <?php  }?>
                    <tfooter>
                        <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#nuevo">
                            Agregar
                        </button></td>
                    </tfooter>
                    </table> 
                </section>
 
</main>   
<!--modal-->
<div class="modal fade" id="nuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Nuevo Articulo</h4>
			</div>
			<div class="modal-body">
            <form method="POST" action="../Logica/altas_articulos.php">
                <div class="form-group">
                    <input type="text" class="form-control" name="articulo"  placeholder="Nombre Articulo">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="descripcion" placeholder="Descripcion Articulo">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="cantidad" placeholder="Ingresa Cantidad Articulos"  >
                </div>
                <button type="submit" class="btn btn-info">Registrar</button>
            </form>
			</div>
		</div>
	</div>
</div>

<!--modal  -->
        <footer class="footerindex"> 
        Copyright &reg; 2021-<script type="text/javascript">document.write(new Date().getFullYear());
        </script> CorpoSupport - Todos los derechos reservados.
        </footer>
        </body>
        
</html>
<?php
}
?>