<!DOCTYPE html>
<html>

<head>
    <title>Dopcoin Login</title>
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
    <link rel="shortcut icon" href="img/icon2.png"/>
</head>
*/<style>
   body {
    background: url("img/banner/22.jpg") repeat center 10%;
   }
   .flat-blue .login-box .login-form .login-body {
    background-color: transparent;
   }
   
}
.flat-blue a {
    color: #fff;
}
   .titulo-login{
    color: #ffffff;
    text-align: center;
   }
   .titulo-login2{
    color: #ffffff;
    text-align: left;
   }
   .login-page .login-button .btn {
    
    width: 100%;
     }
   
</style>/*

<body class="flat-blue login-page">
    <div class="container">
         <h2 class="titulo-login">Bienvenido al registro de Dopcoin.co</h2>
         <p class="titulo-login">Crypto Exchange  DopCoin SRL | Con este formulario perteneceras a la familia DopCoin , requerimos ciertas informaciones sobre nuestros clientes para poder operar con nosotros. Al llenar el formulario usted acepta los Terminos y Condiciones de DopCoin</p><br>

         <div class="row">
                        <div class="col-xs-2">
                            </div>
                        <div class="col-xs-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Rellene todos los campos</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="inicio.php?page=home&id=2" method="post" role="form">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Direccion de correo electronico *</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tu direccion de correo electronico">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Nombre Completo</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Introduzca nombre y apellido">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Numero de Cedula o Pasaporte</label>
                                            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Introduzca cedula o pasaporte">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Direccion de la vivienda*</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Direccion">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ocupacion y lugar de trabajo</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Introduzca su ocupacion y lugar de trabajo">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Numero telefonico</label>
                                            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Introduzca su numero telefonico">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Wallet Donde Recibira su Crypto. [ WALLET + (BTC - ETH - LTC - Dash) ] - (Puede ser modificada en su orden)</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Introduzca su Wallet">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">CONOCE TU CLIENTE (KYC ) ES UN FORMULARIO QUE DEBE LLENARSE A MANO PARA LUEGO SER SUBIDO JUNTO AL CLIENTE EN LA MISMA FOTOGRAFÍA</label>
                                            <img src="img/fotokyc.jpeg" align= "center" width="100%">
                                        </div><br>
                                        <div class="form-group">
                                            <label for="exampleInputFile">SUBIR HOJA KYC</label>
                                            <input type="file" id="exampleInputFile">
                                            <p class="help-block">Suba los datos correctos</p>
                                        </div><br>
                                        <div class="form-group">
                                            <label for="exampleInputFile">SUBIR HOJA KYC + CLIENTE</label>
                                            <input type="file" id="exampleInputFile">
                                            <p class="help-block">Suba los datos correctos</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Codigo de referido</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Introduzca su codigo de referido de no poseerlo deje la casilla vacia">
                                        </div>
                                         <label for="exampleInputFile">Cuenta de banco para pagos o depositos</label>
                                        <div class="checkbox">

                                          <div class="checkbox3 checkbox-round">
                                            <input type="checkbox" id="checkbox-1">
                                            <label for="checkbox-1">
                                              BANK RESERVAS
                                            </label>
                                            <input type="checkbox" id="checkbox-2">
                                            <label for="checkbox-2">
                                              BHD LEON
                                            </label>
                                            <input type="checkbox" id="checkbox-3">
                                            <label for="checkbox-3">
                                              ASOCIACION ROMANA DE AHORRO Y PRESTMOS
                                            </label>
                                            <input type="checkbox" id="checkbox-4">
                                            <label for="checkbox-4">
                                              BANCO ADEMI
                                            </label>
                                            <input type="checkbox" id="checkbox-7">
                                            <label for="checkbox-7">
                                              SCOTIABANK
                                            </label>
                                            <input type="checkbox" id="checkbox-8">
                                            <label for="checkbox-8">
                                              BANCO DEL PROGRESO
                                            </label>
                                            <input type="checkbox" id="checkbox-9">
                                            <label for="checkbox-9">
                                              BANCO VIMENCA
                                            </label>
                                            <input type="checkbox" id="checkbox-10">
                                            <label for="checkbox-10">
                                              BANCO BDI
                                            </label>
                                            <input type="checkbox" id="checkbox-11">
                                            <label for="checkbox-11">
                                              BANCO POPULAR ( LBTR y ACH )
                                            </label>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Numero de cuenta</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Introduzca su numero de cuenta">
                                        </div>
                                        <label for="exampleInputFile">Tipo de cuenta</label>
                                        <div class="checkbox">

                                          <div class="checkbox3 checkbox-round">
                                            <input type="checkbox" id="checkbox-13">
                                            <label for="checkbox-13">
                                              CUENTA CORRIENTE
                                            </label>
                                            <input type="checkbox" id="checkbox-14">
                                            <label for="checkbox-14">
                                              CUENTA AHORRO
                                            </label>
                                          </div>
                                        </div><br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">TRANSFERENCIAS LTBR y ACH.</label>
                                            <p>Las ventas menores a ( 5000 $ ) DOP No aplican para transferencias LTBR al menos que el cliente acepte los costo de dicha transferencia ( 100 $ ) DOP.<br><br>-ACH:la transaccion se reflejara en la cuenta destino dentro de un periodo de 1 a 24 horas;<br><br>-LBTR: la transaccion se efectuara en tiempo real, con un costo por comision.De lunes a viernes en horario de 8:00AM a 4:00PM., toda transaccion realizada en o fuera del horario antes indicado, sera procesada con fecha valor del siguiente dia laborable.</p>
                                        </div>
                                        <label for="exampleInputFile">Acepta los terminos sobre el tiempo en las transferencia LTBR y ACH. <a href="https://bit.ly/2K0no0y">(Leer Aqui)</a></label>
                                        <div class="checkbox">

                                          <div class="checkbox3 checkbox-round">
                                            <input type="checkbox" id="checkbox-19">
                                            <label for="checkbox-19">
                                              Si Acepto
                                            </label>
                                          </div>
                                        </div><br>
                                        <label for="exampleInputFile">Acepta los terminos de DopCoin <a href=" https://bit.ly/DopCoinTerminosYCondiciones">(Leer Aqui)</a></label>
                                        <div class="checkbox">

                                          <div class="checkbox3 checkbox-round">
                                            <input type="checkbox" id="checkbox-191">
                                            <label for="checkbox-191">
                                              Si Acepto
                                            </label>
                                          </div>
                                        </div>

                                        <button type="submit" class="btn btn-info">Registrar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            </div>
                    </div>
        
    </div>
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
            <!-- Javascript -->
            <script type="text/javascript" src="js/app.js"></script>
            <script type="text/javascript" src="js/index.js"></script>
         <?php
             session_start();
             if ($_SESSION["autenticado"] == "SI") {
             session_destroy();
             exit();
             }
         ?>

</body>

</html>
