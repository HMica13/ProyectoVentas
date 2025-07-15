<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <!--Le vamos a decir al navegador que el diseño que vamos a realizar va a ser responsivo o adaptable-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SysVentas</title>
        <!--Añadimos la libreria de Boostrap 3.3.5-->
        <link rel="stylesheet" href="../public/css/bootstrap.min.css">
        <!--Añadimos la libreria de font awesome-->
        <link rel="stylesheet" href="../public/css/font-awesome.css">
        <!--Añadimos la libreria deñ tema estilos AminLTE-->
        <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
        <!--Añadimos librerias de AdminLTE-->
        <link rel="stylesheet" href="../public/css/_all-skins.min.css">
        <link rel="stylesheet" href="../public/img/apple-touch-icon.png">
        <link rel="shorcut icon" href="../public/img/favicon.ico">
    </head>
    <body class="hold-transition skin-yellow-light sidebar-mini">
        <!--Div que contiene toda la estructura del body-->
        <div class="wrapper">
            <!--Aquí va el header-->
            <header class="main-header">
                <!--Logo-->
                <a href="#" class="logo">
                    <!--Mini logo para el sidebar mini 50x50 pixeles-->
                    <span class="logo-mini"><b>Sys</b>Ventas</span>
                    <!--Logo para un dispositivo normal y dispositivos moviles-->
                    <span class="logo-lg"><b>SysVentas</b></span>
                </a> <!--Fin del logo-->

                <!--Aquí va el header del Navbar: los estilos se pueden encontrar en header.less-->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!--Botón de la hamburguesa del navbar-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Navegación</span>

                    </a>
                    <!--Navbar menú derecho-->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!--Cuenta de usuario: los estilos se encuentran en dropdown.less-->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropwdown-toggle" data-toggle="dropdown">
                                    <!--Cargamos la imágen del usuario-->
                                    <img src="../public/img/kitty.png" alt="imagen de usuario" class="user-image">
                                    <!--Nombre de usuario-->
                                    <span class="hidden-xs">Kelly Micaela</span>
                                </a> <!--Fin imagen de usuario-->

                                <!--Desplegable del usuario-->
                                <ul class="dropdown-menu">
                                    <!--Imagen del usuario-->
                                    <li class="user-header">
                                        <img src="../public/img/kitty.png" alt="imagen usuario" class="img-circle">
                                        <p>Kelly Solano</p>
                                    </li>

                                    <!--Menú footer-->
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Salir</a>
                                        </div>
                                    </li>
                                </ul>
                    
                            </li>
                        </ul>
                    </div>

                </nav><!--Fin del navbar-->
            </header> <!--Fin del header-->

            <!--Menú izquierdo en columna, contiene un logo y el sidebar-->
            <aside class="main-sidebar">
                <section class="sidebar">
                    <!--Ponemos cada uno de los menús-->
                    <ul class="sidebar-menu">
                        <li class="header">SYSVENTAS</li>
                        <li>
                            <a href="#">
                                <i class="fa fa-cogs"></i>
                                <span>Configuración</span>
                            </a>
                        </li>
                        
                        <!--Lista escritorio-->
                        <li>
                            <a href="#">
                                <i class="fa fa-tasks"></i>
                                <span>Escritorio</span>
                            </a>
                        </li>

                        <!--Lista Almacén con menú desplegable-->
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Almacén</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>

                            <ul class="treeview-menu">
                                <li><a href="articulo.php">
                                    <i class="fa fa-circle-o"></i>Artículos
                                </a></li>

                                <li>
                                    <a href="categoria.php">
                                        <i class="fa fa-circle-o"></i>Categorías
                                    </a>
                                </li>

                            </ul>
                        </li> <!--Fin de la lista de almacén-->
                        <!--Lista persona-->
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Ventas</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="venta.php"><i class="fa fa-circle-o"></i>Ventas</a></li>
                                <li><a href="cliente.php"><i class="fa fa-circle-o"></i>Clientes</a></li>
                            </ul>
                        </li> <!--Fin lista ventas-->

                        <!--Lista acceso-->
                        <li class="treeview">
                            <a href="">
                                <i class="fa fa-folder"></i>
                                    <span>Acceso</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="usuario.php"><i class="fa fa-circle-o"></i>Usuarios</a></li>
                                <li><a href="permiso.php"><i class="fa fa-circle-o"></i>Permisos</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>

            </aside> <!--Fin del sidebar-->