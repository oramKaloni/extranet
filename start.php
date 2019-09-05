<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Extranet | Kaloni</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- styles -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/docs.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/flexslider.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300|Open+Sans:400,300,300italic,400italic" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/success.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body style="background-image: url('assets/img/backTech.jpg'); background-size: cover; color:white;">
<?php 
include("assets/get_ip.php");
$ipClient = getRealIP();
include("assets/redirect.php");

 ?>



    <div class="vertical-center" style="text-align:center;">
        <form action="assets/php/start.php"  class="form-container" method="POST" enctype="multipart/form-data">
            <div>
                <img src="assets/img/logo2.png" alt="Kaloni Intranet" />
            </div> <br/><br/>
            <div>
                <label for="mailStart"><b>Correo electrónico</b></label>
                <input type="mail" style="height:30px;" placeholder="mail@domain.com" name="mailStart" id="mailStart" required>
            </div> <br/>
            <div>
                <label for="passStart"><b>Contraseña</b></label>
                <input type="password" style="height:25px;" placeholder="*****" name="passStart" id="passStart" required>
            </div>
            <div>
              <button type="submit" class="btn" style="background:white; border-radius: 5px; margin-top:10px;">Entrar</button>
            </div>
        </form>
    </div>

</body>

</html>
