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
    <div class="jumbotron subhead" id="overview"> </div>
  </section>

  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div>
          <!-- start article full post -->
          <?php
          // 1) Conexión
          require_once('assets/php/bdd1.php');

          $getID = $_GET["vNv"];

          // 2) Preparar la orden SQL
          $consulta = $mysqli->query("SELECT * FROM News n LEFT JOIN Departamento de USING (idDepartamento) WHERE n.idNews = $getID");

          // 3) Ejecutar la orden y obtener datos
          while ($fila = mysqli_fetch_array($consulta)) {

            // Format to show date
            $fechaNews = date_create($fila['fechaNews']);
            $fechaNews = date_format($fechaNews, 'd F Y');

            // Agregar salto de línea a descripción
            $descripcion = rawurlencode($fila['descripcionNews']);
            $descripcion = rawurldecode(str_replace("%0D%0A", "<br>", $descripcion));

            echo " 
                <article class='blog-post'>
                    <div class='tooltip-demo headline'>
                      <h4>" . $fila['nombreNews'] . "</h4>
                    </div>
                    <div class='clearfix'></div>
                    ";

            if ($fila['imagenNews'] != null) {
              echo "<img src='assets/img/news/" . $fila['imagenNews'] . "' alt='Noticias Kaloni' title='Noticias Kaloni' /> ";
            } else if ($fila['imagenNews'] == null) {
              echo "<img src='assets/img/dummies/work3.jpg' alt='Noticias Kaloni' title='Noticias Kaloni' /> ";
            }

            echo " <div class='clearfix'></div>
                    <p> " . $descripcion . " </p>
            ";
            if ($fila['fraseNews'] != null) {
              echo "<br/> <blockquote> <p> " . $fila['fraseNews'] . " </p> </blockquote> ";
            }

            if ($fila['fileNews'] != null) {
              echo "<br/> <a href='assets/file/news/" . $fila['fileNews'] . " ' target='_blank'> Ver PDF </a>";
            }

            echo " </article> ";
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