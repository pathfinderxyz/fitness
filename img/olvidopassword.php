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
         <h2 class="titulo-login">Recuperar su Password</h2>
         <br>

         <div class="row">
                        <div class="col-xs-2">
                            </div>
                        <div class="col-xs-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Introduzca el correo electronico que utilizo para registrarse y le enviaremos la password</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="inicio.php?page=home&id=2" method="post" role="form">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Direccion de correo electronico *</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Introduzca su direccion de correo electronico">
                                        </div>
                                        

                                        <button type="submit" class="btn btn-info">Enviar password</button>
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
