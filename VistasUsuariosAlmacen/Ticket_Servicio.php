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
    <link rel="preload" href="../css/normalize.css" as="style">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="preload" href="../css/bootstrap.min.css" as="style">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="preload" href="../css/estilo.css" as="style">
    <link rel="stylesheet" href="../css/estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
   <!-- <link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.js"/>
    <script type="text/javascript" src="../DataTables/datatables.min.js"></script>-->
    <script src="../js/jquer.min.js"></script>
   
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
                    <section class="contenedorindex2 ">
                <div class="row container-fluid">
                <section class="col">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-headset" width="80" height="80" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <rect x="4" y="13" rx="2" width="4" height="6" />
                    <rect x="16" y="13" rx="2" width="4" height="6" />
                    <path d="M4 15v-3a8 8 0 0 1 16 0v3" />
                    <path d="M18 19a6 3 0 0 1 -6 3" />
                    </svg>
                </section>
                <section class="col-10">
                <form method="POST" action="../Logica/Correos.php">
                    <legend class="text-center">Describenos Tu Problema</legend>
                <div class="row">
                    <div class="col">
                    <input type="text" class="form-control" placeholder="Departamento" name="departamento">
                    </div>
                    <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre Completo" name="nombre">
                    </div>
                    
                </div>
                <br>
                <div class="row">
                    <div class="col">
                    <input type="text" class="form-control" placeholder="Correo" name="correo">
                    </div>
                    <div class="col">
                    <input type="text" class="form-control" placeholder="Empresa" name="empresa">
                    </div>
                    
                </div>
                <br>
                <div class="row">
                    <div class="col">
                    <input type="text" class="form-control" placeholder="Telefono" name="telefono">
                    </div>
                    <div class="col">
                    <input type="text" class="form-control" placeholder="Asunto" name="asunto">
                    </div>
                    
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Cuerpo De Mensaje</label>
                    <textarea class="form-control" name="problema" rows="3"></textarea>
                </div>
                <hr>
                <div class="boton">
                    <input type="submit" name="enviar" value="Solicitar Ticket" class="btn btn-success">
                </div>
                </form>
                </section>
                
            </div>
                </section>
                </section>
                </div>
</main>  


        <footer class="footerindex"> 
        Copyright &reg; 2021-<script type="text/javascript">document.write(new Date().getFullYear());
        </script> CorpoSupport - Todos los derechos reservados.
        </footer>
        </body>
        <script>var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function () {
        myInput.focus()
        })
        </script>
</html>
<?php
}
?>