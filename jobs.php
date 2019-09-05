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

  <section id="intro" style="background: white!important;">
    <div class="jumbotron masthead jobSection">
      <div class="container">
        <div class="row">
          <div class="span12">
            <center> <br /><br />
              <div class="span3 jobBanner1">
                <input type="text" class="form-control jobInput" placeholder="Palabras clave" name="jobKeywords" id="jobKeywords">
              </div>
              <div class="span3 jobBanner1">
                <select class="custom-select my-1 mr-sm-2 jobInput" name="jobZona" id="jobZona">
                  <option selected>Zona Kaloni</option>
                  <option value="1">Clínica Santa Fe</option>
                  <option value="2">Clínica Satélite</option>
                  <option value="3">Clínica Altavista</option>
                  <option value="4">Clínica Polanco</option>
                  <option value="5">Clínica Monterrey</option>
                  <option value="6">Clínica Tijuana</option>
                  <option value="7">Clínica Veracruz</option>
                  <option value="8">Clínica Guadalajara</option>
                  <option value="9">Clínica Puebla</option>
                  <option value="10">Clínica Chihuahua</option>
                  <option value="11">Clínica Cancún</option>
                </select>
              </div>
              <div class="span3 jobBanner1">
                <select class="browser-default custom-select jobInput" name="jobCategoria" id="jobCategoria">
                  <option selected>Categoría</option>
                  <option value="1">Almacén</option>
                  <option value="2">Call center</option>
                  <option value="3">Contabilidad y Finanzas</option>
                  <option value="4">Desarrollo y Tecnología</option>
                  <option value="5">Enfermería</option>
                  <option value="6">Médicos de injerto</option>
                  <option value="7">Recepción</option>
                  <option value="8">Recursos Humanos</option>
                  <option value="9">Sistemas</option>
                </select>
              </div>
              <div class="span2 jobBanner1">
                <button class="btn btn-defaultBlue btn-lg" onclick="reloadDataTable1();">Buscar</button>
              </div>
            </center>

            <div class="row" id="showResults">
              <br /><br /><br /><br />
              <h2 class="h2Job text-center">Resultados de la búsqueda</h2><br />
              <?php
              // 1) Conexión
              $mysqli = new mysqli('localhost', 'jobs_mx1', 'JobsMX19*1', 'JobsMX1');
              $mysqli->set_charset("utf8");

              $valueCategoria = $_COOKIE['jobCategoriaValue'];
              $valueZona = $_COOKIE['jobZonaValue'];
              $valueNombreOferta = $_COOKIE['jobTitleValue'];
              //echo "Value Cookie Categoria: " . $valueCategoria;
              $valueCategoria = $_GET['vC'];
              $valueZona = $_GET['vZ'];
              $valueNombreOferta = $_GET['vNO'];

              // 2) Preparar la orden SQL
              $consulta = $mysqli->query("SELECT idVacante, nombreOferta, fechaOferta, nombreCategoria, nombreSucursal FROM Vacante v LEFT JOIN Categoria c ON v.idCategoria = c.idCategoria LEFT JOIN Sucursal s ON v.idSucursal = s.idSucursal WHERE v.idCategoria = '$valueCategoria' AND v.idSucursal = '$valueZona' AND nombreOferta like '%$valueNombreOferta%'");

              // 3) Ejecutar la orden y obtener datos
              //$datos= mysql_query ($consulta);

              echo "<table id='showTable1' class='table table-bordered table-striped table-hover js-basic-example dataTable table1'>
                    <thead>
                        <tr class='trTable'>
                            <th>Vacante</th>
                            <th>Fecha</th>
                            <th>Categoría</th>
                            <th>Sucursal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    ";

              // 4) Ir Imprimiendo las filas resultantes 
              while ($fila = mysqli_fetch_array($consulta)) {
                $datetime = new DateTime($fila['fechaOferta']);
                $date = $datetime->format('d/m/Y');
                $time = $datetime->format('H:i:s');

                echo "
                            
                            <tr>
                                <td class='columnT tdTable'>" . $fila['nombreOferta'] . "</td>
                                <td class='columnT tdTable'>" . $date . "</td>
                                <td class='columnT tdTable'>" . $fila['nombreCategoria'] . "</td>
                                <td class='columnT tdTable'>" . $fila['nombreSucursal'] . "</td>
                                <td class='columnT tdTable'><a href='vacante.php?vV=" . $fila['idVacante'] . "' class='leermas'> Leer más </a> </td>
                            </tr>
                            </a>
                        ";
              } //while

              echo "
                    </tbody>
                    <tfoot>
                        <tr class='trTable'>
                            <th>Vacante</th>
                            <th>Fecha</th>
                            <th>Categoría</th>
                            <th>Sucursal</th>
                            <th></th>
                        </tr>
                    </tfoot>                                    
                </table>
                ";
              ?>
            </div> <br /><br />
            <!-- End Resultados búsqueda -->

            <!-- Nuevas vacantes -->
            <div class="row">
              <h2 class="h2Job text-center">Nuevas vacantes</h2><br />
              <?php
              // 1) Conexión
              $mysqli = new mysqli('localhost', 'jobs_mx1', 'JobsMX19*1', 'JobsMX1');
              $mysqli->set_charset("utf8");

              // 2) Preparar la orden SQL
              //$consulta= $mysqli->query("SELECT * FROM jobs_mx1.Task t LEFT JOIN jobs_mx1.Status s ON t.idStatus = s.idStatus LEFT JOIN mkt_paginas.Adjunto a USING (idTask) WHERE nombreStatus = 'Creado' AND fechaCreado like '%/01/%'");
              //$consulta= $mysqli->query("SELECT * FROM Vacante");
              $consulta = $mysqli->query("SELECT idVacante, nombreOferta, fechaOferta, nombreCategoria, nombreSucursal FROM Vacante v LEFT JOIN Categoria c ON v.idCategoria = c.idCategoria LEFT JOIN Sucursal s ON v.idSucursal = s.idSucursal");

              // 3) Ejecutar la orden y obtener datos
              //$datos= mysql_query ($consulta);

              echo "<table id='showTable2' class='table table-bordered table-striped table-hover js-basic-example dataTable table1'>
                    <thead>
                        <tr class='trTable'>
                            <th>Vacante</th>
                            <th>Fecha</th>
                            <th>Categoría</th>
                            <th>Sucursal</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";

              // 4) Ir Imprimiendo las filas resultantes 
              while ($fila = mysqli_fetch_array($consulta)) {
                $datetime = new DateTime($fila['fechaOferta']);
                $date = $datetime->format('d/m/Y');
                $time = $datetime->format('H:i:s');

                echo "
                            <a href='vacante.php?vV=" . $fila['idVacante'] . "'>
                            <tr>
                                <td class='columnT tdTable'>" . $fila['nombreOferta'] . "</td>
                                <td class='columnT tdTable'>" . $date . "</td>
                                <td class='columnT tdTable'>" . $fila['nombreCategoria'] . "</td>
                                <td class='columnT tdTable'>" . $fila['nombreSucursal'] . "</td>
                            </tr>
                            </a>
                        ";
              } //while

              echo "
                    </tbody>
                    <tfoot>
                        <tr class='trTable'>
                            <th>Vacante</th>
                            <th>Fecha</th>
                            <th>Categoría</th>
                            <th>Sucursal</th>
                        </tr>
                    </tfoot>                                    
                </table>
                ";
              ?>
            </div>

          </div>
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

  <script>
    function reloadDataTable1() {
      var jobCategoriaOption = document.getElementById("jobCategoria").selectedIndex;
      var jobCategoriaValue = document.getElementsByTagName("option")[jobCategoriaOption].value;
      document.cookie = "jobCategoriaValue = " + jobCategoriaValue;

      var jobZonaOption = document.getElementById("jobZona").selectedIndex;
      var jobZonaValue = document.getElementsByTagName("option")[jobZonaOption].value;
      document.cookie = "jobZonaValue = " + jobZonaValue;

      var jobTitleValue = document.getElementById("jobKeywords").value;
      document.cookie = "jobTitleValue = " + jobTitleValue;

      //$('#showTable1').DataTable().ajax.reload();

      window.location.href = "jobs.php?vC=" + jobCategoriaValue + "&vZ=" + jobZonaValue + "&vNO=" + jobTitleValue;
      $('#showResults').removeClass('hidden');

    }
  </script>

</body>

</html>