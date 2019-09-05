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
  <section id="subintro" class="sectionOrange"  style="background:lightslategray !important;">
    <div class="jumbotron subhead" id="overview"> </div>
  </section>

  <section id="intro">
    <div class="jumbotron masthead">
      <div class="container">
        <div class="row">
          <!-- 
            nombreFormulario
            linkFormulario
            fechaSurvey
            activoFormulario
            nombreHtml
            -->
          <h1 class='black'>Publicar encuesta</h1>
          <form action="assets/php/sendSurveys.php" class="form-container" method="POST" >
            <br /><br />
            <h4 class="skyBlueDark">Datos Generales</h4> <br />
            <div class="row-fluid">
              <div class='span2'> <label class='black rowAddNew' for="nombreFormulario">Nombre formulario*: </label> </div>
              <div class='span10'> <input class='rowAddNew' type="text" placeholder="Escribir nombre aquí" name="nombreFormulario" id="nombreFormulario" required> </div>
            </div>
            <div class="row-fluid">
              <div class='span2'> <label class='black rowAddNew' for="fechaSurvey">Fecha encuesta*: </label> </div>
              <div class='span10'> <input class='rowAddNew' type="date" placeholder="Seleccionar fecha" name="fechaSurvey" id="fechaSurvey" required> </div>
            </div>
            <div class="row-fluid">
              <div class='span2'> <label class='black rowAddNew' for="linkFormulario">Link de encuesta*: </label> </div>
              <div class='span10'> <input class='rowAddNew' type="text" placeholder="Link de encuesta" name="linkFormulario" id="linkFormulario" required> </div>
              </div>
            </div>

            <div class="row-fluid">
              <div class='span12'>
                <p></p><br />
                <center><button type="submit" class="btn btn-primary">Registrar</button></center>
              </div>
            </div>
          </form>
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


  <style>
    .black {
      color: black
    }

    .rowAddNew {
      display: inline-table;
    }
  </style>

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