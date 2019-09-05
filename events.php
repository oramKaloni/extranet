<?php include("assets/php/validate.php"); ?>

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

<body>
<?php 
include("assets/get_ip.php");
$ipClient = getRealIP();
include("assets/redirect.php");
include("shared/header.php");
 ?>
  <!-- Subhead
================================================== -->
  <section id="subintro" class="sectionOrange">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span8">
            <h3><i class="m-icon-big-swapright m-icon-white"></i> Eventos</h3>
            <p>Informar y describir los eventos Kaloni</p>
          </div>
          <?php if ($_COOKIE['cooValidate'] == 1) {
            echo "<div class='span4'> <a style='background:#ec4f13; color: white;' href='admin-events.php'> <h3><i class='m-icon-big-swapright m-icon-white'></i> Agregar evento</h3> </a> </div>";
          } ?>
        </div>
      </div>
    </div>
  </section>

  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div>
          <?php
          // 1) Conexión
          require_once('assets/php/bdd1.php');

          // 2) Preparar la orden SQL
          $consulta = $mysqli->query("SELECT * FROM Event e LEFT JOIN Departamento de USING (idDepartamento) ORDER BY fechaEvento DESC");

          // 3) Ejecutar la orden y obtener datos
          while ($fila = mysqli_fetch_array($consulta)) {

            // Truncate to 40 words per description
            $phrase_array = explode(' ', $fila['descripcionEvento']);
            if (count($phrase_array) > 40 && 40 > 0) {
              $descripcionTexto = implode(' ', array_slice($phrase_array, 0, 40)) . '...';
            }
            // Send ID's event to events-single.php
            $urlEventSingle = "events-single.php?vEv=" . $fila['idEvento'];

            // Format to show date
            $fechaEvento = date_create($fila['fechaEvento']);
            $fechaEvento = date_format($fechaEvento, 'd F Y');

            echo " 
                <article class='blog-post'>
                    <div class='tooltip-demo headline'>
                      <h4><a style='color:#ec4f13;' href='" . $urlEventSingle . "'>" . $fila['nombreEvento'] . "</a></h4>
                    </div>
        
                    <div class='row'>
                      <div class='span3'>
                        <a href='" . $urlEventSingle . "'><img src='assets/img/events/" . $fila['imagenEvento'] . "' alt='Evento Kaloni' /></a>
                      </div>
                      <div class='span5'>
                        <div class='clearfix'></div>
                        <p><strong>" . $fechaEvento . "</strong></p>
                        <p>
                           " . $descripcionTexto . "
                        </p>                                              
                        <a class='btn btn btn-success' type='button' href='" . $urlEventSingle . "'>Leer más</a> 
                      </div>
                    </div>
                </article>
            ";
          }

          ?>

        </div>
      </div>
    </div>
  </section>

  <!-- end tagline -->

  <!-- Footer
 ================================================== -->
 <?php 
include("shared/footer.php");
 ?>

  <script src="assets/js/jquery-1.8.2.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/google-code-prettify/prettify.js"></script>
  <script src="assets/js/modernizr.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/jquery.elastislide.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/application.js"></script>
  <script src="assets/js/hover/jquery-hover-effect.js"></script>
  <script src="assets/js/hover/setting.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="assets/js/custom.js"></script>

</body>

</html>