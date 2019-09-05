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
            <h3><i class="m-icon-big-swapright m-icon-white"></i> Proyectos</h3>
            <p>Informar y describir los proyectos Kaloni</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="maincontent">
    <div class="container">
      <div class="row-fluid">
        <div class="span6">
          <select onchange="mesFunction()" id="mesOpt" style="background:#ec4f13; color: white; margin-bottom:40px;">
            <option value="" onclick="mesFunction()">Filtrar por mes</option>
            <option value="01" onclick="mesFunction()">Enero</option>
            <option value="02" onclick="mesFunction()">Febrero</option>
            <option value="03" onclick="mesFunction()">Marzo</option>
            <option value="04" onclick="mesFunction()">Abril</option>
            <option value="05" onclick="mesFunction()">Mayo</option>
            <option value="06" onclick="mesFunction()">Junio</option>
            <option value="07" onclick="mesFunction()">Julio</option>
            <option value="08" onclick="mesFunction()">Agosto</option>
            <option value="09" onclick="mesFunction()">Septiembre</option>
            <option value="10" onclick="mesFunction()">Octubre</option>
            <option value="11" onclick="mesFunction()">Noviembre</option>
            <option value="12" onclick="mesFunction()">Diciembre</option>
          </select>
        </div>
        <div class="span6">
          <button style="background:#ec4f13; color: white;" onclick="window.location='projects.php';"> Limpiar filtro</button>
        </div>
      </div>
      <div class="row">
        <ul class='portfolio-area da-thumbs'>
          <?php
          // 1) Conexión
          require_once('assets/php/bdd1.php');

          // 2) Preparar la orden SQL
          $getID = $_GET["vPy"];

          if ($getID != null) {
            $consulta = $mysqli->query("SELECT * FROM Project p LEFT JOIN Departamento de USING (idDepartamento) WHERE p.fechaProyecto LIKE '%-$getID-%' ORDER BY fechaProyecto DESC");
            $consulta2 = $mysqli->query("SELECT COUNT(*) count FROM Project p LEFT JOIN Departamento de USING (idDepartamento) WHERE p.fechaProyecto LIKE '%-$getID-%' ORDER BY fechaProyecto DESC");
            while ($row = mysqli_fetch_assoc($consulta2)) {
              $totalRow = $row['count'];
            }
            if ($totalRow == 0) {
              echo "<h4>No se encontraron resultados</h4>";
            }
          }
          if ($getID == null) {
            $consulta = $mysqli->query("SELECT * FROM Project p LEFT JOIN Departamento de USING (idDepartamento) ORDER BY fechaProyecto DESC");
          }

          // 3) Ejecutar la orden y obtener datos
          while ($fila = mysqli_fetch_array($consulta)) {

            // Truncate to 40 words per description
            $phrase_array = explode(' ', $fila['descripcionProyecto']);
            if (count($phrase_array) > 40 && 40 > 0) {
              $descripcionTexto = implode(' ', array_slice($phrase_array, 0, 40)) . '...';
            }
            // Send ID's event to project-single.php
            $urlNewsSingle = "project-single.php?vPy=" . $fila['idProyecto'];

            // Format to show date
            $fechaNews = date_create($fila['fechaProyecto']);
            $fechaNews = date_format($fechaNews, 'd F Y');

            echo " 
                <li class='portfolio-item2' data-id='id-0' data-type='web'>
                    <div class='span4'>
                      <div class='thumbnail'>
                        <div class='tooltip-demo image-wrapp'>
                        ";

            if ($fila['imagenProyecto'] != null) {
              echo "<img src='assets/img/project/" . $fila['imagenProyecto'] . "' alt='Proyecto Kaloni' title='Proyecto Kaloni' /> ";
            } else if ($fila['imagenProyecto'] == null) {
              echo "<img src='assets/img/dummies/work3.jpg' alt='Proyecto Kaloni' title='Proyecto Kaloni' /> ";
            }

            echo "              
                        <h4>" . $fila['nombreProyecto'] . "</h4>
                          &nbsp;&nbsp;&nbsp;<span class='skyBlue'>" . $fila['nombreProyecto'] . "</span> <br/>
                          &nbsp;&nbsp;&nbsp;<span>" . $fechaNews . "</span>
                          <article class='da-animate da-slideFromRight' style='display: block;'>
                            <a class='link_post' href='" . $urlNewsSingle . "'><img src='assets/img/icons/link_post_icon.png' alt='Proyecto Kaloni' /></a>
                          </article>
                        </div>
                      </div>
                    </div>
                </li>
            ";
          }

          ?>
        </ul>
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

  <script>
    function mesFunction() {
      var newsOptName = document.getElementById("mesOpt").value;
      document.cookie = "newsOptName = " + newsOptName;

      window.location.href = "projects.php?vPy=" + newsOptName;
    }
  </script>

  <!-- Template Custom JavaScript File -->
  <script src="assets/js/custom.js"></script>

</body>

</html>