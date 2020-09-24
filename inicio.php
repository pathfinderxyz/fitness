<?php 
    session_start();

    $id=$_GET['id'];
        
    include "login/seguridad.php";
    //include "Errores/mostrar_errores.php";
    include "coneccion/coneccion.php"; 

    $sql = pg_query("select * from usuarios where id='$id'");
    $row = pg_num_rows($sql);
    if ($row) {
        $info = pg_fetch_assoc($sql);
        $_SESSION['usuario'] = $info['usuario'];
        $_SESSION['rol'] = $info['rol'];
        $_SESSION['id']=$info['id'];
        $_SESSION['encargado']=$info['encargado'];
        $_SESSION['color']=$info['color'];
         
    }
    
    $file = "";//Vista a cargar
    $m_menu = "";
    
    //Control peticiones por rol
    if ($_SESSION['rol'] == 'admin' || $_SESSION['rol'] == 'bne' || $_SESSION['rol'] == 'un' || $_SESSION['rol'] == 'esp') { //lo que hace aqui es preguntar :
          // si el usuario es tu, da o su entonces si lo que se devolvio por parametros get fue page = xxxxxx entonces llevalo alla 
        if (isset($_GET['page'])) {
            if ($_GET['page'] == 'registrar') {
                $file = 'registrar/registro.php';                
            }elseif ($_GET['page'] == 'opciones') {
                $file = 'biennacional/opciones.php';   
            }elseif ($_GET['page'] == 'home') {
                $file = 'home.php';   
            }elseif ($_GET['page'] == 'regexito') {
                $file = 'registrar/registro_exitoso.php';   
            }elseif ($_GET['page'] == 'enviostransito') {
                $file = 'ver_registros/ver.php';   
            }elseif ($_GET['page'] == 'buscar') {
                $file = 'buscar/consultar.php';   
            }elseif ($_GET['page'] == 'update') {
                $file = 'actualizar/update.php';   
            }elseif ($_GET['page'] == 'update2') {
                $file = 'actualizar/update2.php';   
            }elseif ($_GET['page'] == 'update3') {
                $file = 'actualizar/actexito.php';   
            }elseif ($_GET['page'] == 'historial') {
                $file = 'ver_registros/historial.php';   
            }elseif ($_GET['page'] == 'datos') {
                $file = 'perfil/datos.php';   
            }elseif ($_GET['page'] == 'datos') {
                $file = 'perfil/datos.php';   
            }elseif ($_GET['page'] == 'vip') {
                $file = 'vip/vip.php';   
            }elseif ($_GET['page'] == 'compra') {
                $file = 'transacciones/compra.php';   
            }elseif ($_GET['page'] == 'venta') {
                $file = 'transacciones/venta.php';   
            }
        }else{
            $file = 'inicio.php';  
        }
    }
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>Dashboard Dopcoin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/bootstrap3/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/checkbox3.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="lib/css/select2.min.css">


    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/themes/flat-blue.css">
    <!-- icono del sistema -->
    <link rel="shortcut icon" href="img/icon.png"/>
    <style type="text/css">
      .logov{
        margin-left: 15px;
        margin-top: -2px;
       
      }

    </style>


</head>

<body class="flat-blue">
     <div class="app-container">
        <div class="row content-container">

            <nav class="navbar navbar-inverse navbar-fixed-top navbar-top">
                <div class="container-fluid">

                    <!-- icono -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-expand-toggle">
                            <i class="fa fa-bars icon"></i>
                        </button>
                        <ol class="breadcrumb navbar-breadcrumb">
                            <li class="active">Cryptocurrency Exchange</li>
                        </ol>
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-th icon"></i>
                        </button>
                    </div>

                      <!--- menu derecho -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                        <a href="#" class="mitooltip" title="Visite su Billetera" data-placement="top">BTC/USD  7212</a>
                        </li>
                        <li>
                        <a href="#" class="mitooltip" title="Visite su Billetera" data-placement="top">ETH/USD  541,3</a>
                        </li>
                        <li>
                        <a href="#" class="mitooltip" title="Visite su Billetera" data-placement="top">LTC/USD  12,12</a>
                        </li>
                         <li>
                        <a href="#" class="mitooltip" title="Visite su Billetera" data-placement="top">DOP/USD  11,11</a>
                        </li>
                        <li>
                        <a href="#" class="mitooltip" title="Visite su Billetera" data-placement="top">Mi Wallet</a>
                        </li>
                        <li>
                        <a href="#" class="mitooltip" title="Usuario Logeado" data-placement="top"><?php echo $_SESSION['encargado'];?></a>
                        </li>
                        <?php
                            $solpend = pg_query("select count(id) as total1 from solicitud where estado='pendiente'");
                            $sp = pg_fetch_assoc($solpend);
                            $comrep = pg_query("select count(serial) as total2 from comp_enreparacion");
                            $cr = pg_fetch_assoc($comrep);
                        ?>
                     <!--    <?php  
                                  if ($_SESSION['rol'] == 'admin' || $_SESSION['rol'] == 'bne') {
                                     echo '
                        <li>
                        <a href="?page=registrar" class="mitooltip" title="Registrar" data-placement="top"><i class="fa fa-plus"></i></a>
                        </li>';}
                        ?> -->
                      <!--
                       <?php  
                                  if ($_SESSION['rol'] == 'admin' || $_SESSION['rol'] == 'bne' || $_SESSION['rol'] == 'esp') {
                                     echo '
                        <li>
                        <a href="?page=buscar" class="mitooltip" title="Buscar" data-placement="top"><i class="fa fa-search"></i></a>
                        </li>';
                             }
                             ?> -->


                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" class="mitooltip" title="Notificaciones" data-placement="top"><i class="fa fa-exclamation-circle"></i>&nbsp<?php echo $sp['total1']+$cr['total2']; ?></a>
                            <ul class="dropdown-menu  animated fadeInDown">
                                <li class="title">
                                    Notificaciones <span class="badge pull-right"></span>
                                </li>
                                <li>
                                    <ul class="list-group notifications">
                                        <a href="?page=asignar">
                                            <li class="list-group-item">
                                                <span class="badge info"><?php echo $sp['total1']; ?></span> <font color="red"><i class="fa fa-exclamation-circle icon"></i></font> Compras realizadas
                                            </li>
                                        </a>
                                        
                                       
                                        
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>

                </div>
            </nav>

            <!-- menu-->

            <div class="side-menu sidebar-inverse">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="side-menu-container">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                <div class="logov"><img src="img/icon_blanco.png" width="30px"/></div>
                            </a>
                            <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                                <i class="fa fa-times icon"></i>
                            </button>
                        </div>
                        <ul class="nav navbar-nav">
                        
                                  <li class="panel panel-default dropdown ">
                                         <a href="?page=home">
                                             <span class="icon glyphicon glyphicon-home"></span><span class="title">Inicio</span>
                                         </a>
                                     </li>

                            
                                 <?php  
                                  if ($_SESSION['rol'] == 'admin') {
                                     echo '<li class="panel panel-default dropdown ">
                                         <a data-toggle="collapse" href="#dropdown-element">
                                             <span class="icon glyphicon glyphicon-user"></span><span class="title">Perfil</span>
                                         </a>
                                         <!-- Dropdown level 1 -->
                                         <div id="dropdown-element" class="panel-collapse collapse">
                                         <div class="panel-body">
                                             <ul class="nav navbar-nav">
                                                
                                                 <li><a href="?page=datos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon glyphicon glyphicon-folder-open"></i>&nbsp;&nbsp;&nbsp;Datos</a>
                                                 </li> 
                                                 <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon glyphicon glyphicon-ok"></i>&nbsp;&nbsp;&nbsp;Verificar</a>
                                                 </li>   
                                                 <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon glyphicon glyphicon-list-alt"></i>&nbsp;&nbsp;&nbsp;Historial</a>
                                                 </li>     
                                          </div>
                                         </div>
                                     </li>';
                                         }
                                 ?>
                                 <li class="panel panel-default dropdown ">
                                         <a href="?page=vip">
                                             <span class="icon glyphicon glyphicon-star"></span><span class="title">VIP</span>
                                         </a>
                            </li> 
                             
                                 <?php  
                                  if ($_SESSION['rol'] == 'admin') {
                                     echo '<li class="panel panel-default dropdown ">
                                         <a data-toggle="collapse" href="#dropdown-elementt">
                                             <span class="icon glyphicon glyphicon-transfer"></span><span class="title">Transacciones</span>
                                         </a>
                                         <!-- Dropdown level 1 -->
                                         <div id="dropdown-elementt" class="panel-collapse collapse">
                                         <div class="panel-body">
                                             <ul class="nav navbar-nav">
                                                
                                                 <li><a href="?page=compra">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon glyphicon glyphicon-credit-card"></i>&nbsp;&nbsp;&nbsp;Comprar</a>
                                                 </li> 
                                                 <li><a href="?page=venta">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon glyphicon glyphicon-usd"></i>&nbsp;&nbsp;&nbsp;Vender</a>
                                                 </li>     
                                          </div>
                                         </div>
                                     </li>';
                                         }
                                 ?>
                                
                        
                             
                            <!-- Dropdown-->
                            <li class="panel panel-default dropdown">
                                <a href="login/logout.php">
                                    <span class="icon glyphicon glyphicon-off"></span><span class="title">Salir</span>
                                </a>
                                
                            </li>
                                
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>


            <!-- contenido de la pagina-->
               <div class="side-body">

                <?php  
                  include 'app_server/'.$file;
                 ?>
                

               <footer class="app-footer">
                  <div class="wrapper">
                      <span> </span> © Dopcoin 2020 Todos los derechos reservados.
                  </div>
              </footer>
             </div>
        </div>

     <div>
            <!-- Javascript Libs -->
            
            <script type="text/javascript" src="lib/js/jquery.min.js"></script>
            <script type="text/javascript" src="lib/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="lib/js/Chart.min.js"></script>
            <script type="text/javascript" src="lib/js/bootstrap-switch.min.js"></script>
            <script type="text/javascript" src="lib/js/jquery.matchHeight-min.js"></script>
            <script type="text/javascript" src="lib/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="lib/js/dataTables.bootstrap.min.js"></script>
            <script type="text/javascript" src="lib/js/select2.full.min.js"></script>
            <script type="text/javascript" src="lib/js/ace/ace.js"></script>
            <script type="text/javascript" src="lib/js/ace/mode-html.js"></script>
            <script type="text/javascript" src="lib/js/ace/theme-github.js"></script>
            <script src="high/js/highcharts.js"></script>
            <script src="high/js/modules/data.js"></script>
            <script src="high/js/modules/exporting.js"></script>
            <script src="high/js/highcharts-3d.js"></script>

            <!-- Javascript -->
            
            <script type="text/javascript" src="js/app.js"></script>
            <script type="text/javascript" src="js/chartjs.js"></script>
           
            <script type="text/javascript" src="js/index.js"></script>
         
</body>

</html>
