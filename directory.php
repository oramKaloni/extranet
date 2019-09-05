<?php
require_once('assets/php/bdd1.php');
include("assets/php/validate.php");
//  function activatedStatus ($id) {

//   $mysqli = new mysqli('localhost', 'extranet_1', 'extranet19*1', 'Extranet1');
//   $mysqli->set_charset("utf8");
//   $sql = $mysqli->query("UPDATE  Directory SET activo = 1 ,  WHERE  idDirectorio = '" . $id . "'"); 
//   header('Location: https://efactory-kaloni.com/extranet/directory.php'); 
//  }
//  function desactivatedStatus ($id) {
//   $mysqli = new mysqli('localhost', 'extranet_1', 'extranet19*1', 'Extranet1');
//   $mysqli->set_charset("utf8");
//   $sql = $mysqli->query("UPDATE  Directory SET activo = 0 ,  WHERE  idDirectorio = '" . $id . "'"); 
//   header('Location: https://efactory-kaloni.com/extranet/directory.php'); 
//  }


?>

<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Extranet | Kaloni</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- styles -->
  <link href="https://efactory-kaloni.com/extranet/assets/css/all.css" rel="stylesheet">
  <link href="https://efactory-kaloni.com/extranet/assets/css/fontawesome.css" rel="stylesheet">
  <link href="https://efactory-kaloni.com/extranet/assets/css/regular.css" rel="stylesheet">
  <link href="https://efactory-kaloni.com/extranet/assets/css/solid.css" rel="stylesheet">
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/docs.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/flexslider.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300|Open+Sans:400,300,300italic,400italic" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/success.css" rel="stylesheet">
  <link href="assets/css/jquery.dataTables.min.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

  <script>
    document.cookie = "directorioOptValue = 0";
    document.cookie = "directorioOptName = Directorio Kaloni";
  </script>
</head>

<body>

  <?php
  if (isset($_POST['activated']) && isset($_POST['idDirectorio']) && isset($_POST['desactivarItem'])) {
    $id = $_POST['idDirectorio'];
    $activo = $_POST['activated'];
    $sql = $mysqli->query("UPDATE  Directory SET activo = '0' WHERE  idDirectorio = '" . $id . "'");
  }
  if (isset($_POST['activarItem'])  && isset($_POST['idDirectorio'])) {
    $id = $_POST['idDirectorio'];
    $activo = $_POST['activated'];
    $sql = $mysqli->query("UPDATE  Directory SET activo = '1' WHERE  idDirectorio = '" . $id . "'");
  }



  if (isset($_POST['nombreDirectorio']) || isset($_POST['cargoDirectorio'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombreDirectorio'];
    $cargo = $_POST['cargoDirectorio'];
    $telefono = $_POST['telefonoDirectorio'];
    $email = $_POST['emailDirectorio'];
    $extension = $_POST['extensionDirectorio'];
    $pais = $_POST['idPais'];
    $depto = $_POST['idDepartamento'];
    $activo = $_POST['activated'];

    // echo "<script>alert( id   '". $id ."'     );</script>";
    //nombre   '".$nombre."'  cargo   '".$cargo."' telefono   
    // '".$telefono."'  email   '".$email."'  extension   '".$extension."'  pais   '".$pais."'  depto '".$depto."' 



    $sql = $mysqli->query("UPDATE  Directory SET  nombreDirectorio = '" . $nombre . "' , 
                                                  cargoDirectorio = '" . $cargo . "' , 
                                                  telefonoDirectorio = '" . $telefono . "' , 
                                                  emailDirectorio = '" . $email . "', 
                                                  idPais = '" . $pais . "', 
                                                  idDepartamento = '" . $depto . "', 
                                                  activo = '" . $activo . "', 
                                                  extensionDirectorio = '" . $extension . "' WHERE  idDirectorio = '" . $id . "'");



    if ($sql) {
      echo "<script>alert('edito '" . $nombre . "');</script>";
    }
  }
  ?>

  <?php include("shared/header.php"); ?>

  <section id="intro">
    <div class="jumbotron masthead">
      <div class="container">
        <div class="row">
          <div class="span12">

            <form id="form1" runat="server">
              <div class="body">
                <div class="table-responsive">
                  <div>
                    <!-- <div class="col-md-12" style="z-index: 1!important;" <center><select onchange="areaFunction()" id="areaOpt" style="background:#009cea; color: white; margin-bottom:40px; ">
                        <option value="" onclick="areaFunction()">Selecciona un departamento</option>
                        <option value="0" onclick="areaFunction()">Ver todos</option>
                        <option value="1" onclick="areaFunction()">Dirección General</option>
                        <option value="2" onclick="areaFunction()">Dirección Governance</option>
                        <option value="3" onclick="areaFunction()">Calidad</option>
                        <option value="4" onclick="areaFunction()">Dirección de proyectos</option>
                        <option value="5" onclick="areaFunction()">Finanzas</option>
                        <option value="6" onclick="areaFunction()">Mercadotecnia</option>
                        <option value="7" onclick="areaFunction()">Nuevos negocios</option>
                        <option value="8" onclick="areaFunction()">Operaciones</option>
                        <option value="9" onclick="areaFunction()">Recursos humanos</option>
                        <option value="10" onclick="areaFunction()">Tecnología</option>
                        <option value="11" onclick="areaFunction()">K Center</option>
                        <option value="12" onclick="areaFunction()">IT</option>
                        <option value="13" onclick="areaFunction()">Sala de juntas</option>
                        <option value="14" onclick="areaFunction()">Clínicas</option>
                      </select></center>
                    </div> -->
                  </div>

                  <?php
                  // 1) Conexión


                  // 2) Preparar la orden SQL
                  $valueDirectorioPais = $_COOKIE['directorioOptValue'];
                  $nameDirectorioPais = $_COOKIE['directorioOptName'];

                  if ($valueDirectorioPais == 0) {
                    if ($_COOKIE['cooDep'] == 12) {
                      $consulta = $mysqli->query("SELECT * FROM Directory ORDER BY idDirectorio");
                      $nameDirectorioPais = "Directorio Kaloni";
                    } else {
                      $consulta = $mysqli->query("SELECT * FROM Directory WHERE Directory.activo = 1 ORDER BY Directory.idDirectorio");
                      $nameDirectorioPais = "Directorio Kaloni";
                    }
                  }
                  if ($valueDirectorioPais != 0) {
                    if ($_COOKIE['cooDep'] == 12) {
                      $consulta = $mysqli->query("SELECT * FROM Directory ORDER BY idDirectorio ");
                    } else {
                      $consulta = $mysqli->query("SELECT * FROM Directory WHERE Directory.activo = 1 ORDER BY Directory.idDirectorio");
                    }
                  }

                  // 3) Ejecutar la orden y obtener datos
                  //$datos= mysql_query ($consulta);

                  echo " <center><h2 id='titleTable' class='skyBlue'>" . $nameDirectorioPais . "</h2></center> <br/>
                        <table id='TableDirectory' class='table table-bordered table-striped table-hover js-basic-example dataTable' style='color: black;'>
                        <thead>
                            <tr>
                                <th class='skyBlue'>Nombre</th>
                                <th class='skyBlue'>Cargo</th>
                                <th class='skyBlue'>Teléfono</th>
                                <th class='skyBlue'>Extensión</th>
                                <th class='skyBlue'>eMail</th>
                                <th class='skyBlue' style='display:none !important'>Activo</th>
                                <th class='skyBlue' style='display:none !important'>Pais</th>
                                <th class='skyBlue' style='display:none !important'>Departamento</th>
                                ";
                  if ($_COOKIE['cooDep'] == 12 && $_COOKIE['cooValidate'] == 1) {
                    echo "<th class='skyBlue'>Editar</a></th>
                                        <th class='skyBlue'>Activar</th>";
                  }

                  echo  "</tr>
                        </thead>
                        <tbody>
                        ";

                  // 4) Ir Imprimiendo las filas resultantes 
                  while ($fila = mysqli_fetch_array($consulta)) {

                    echo " 
                            <tr>
                                <td id='nombreDirectorio" . $fila['idDirectorio'] . "'  >" . $fila['nombreDirectorio'] . "</td>
                                <td id='cargoDirectorio" . $fila['idDirectorio'] . "'  >" . $fila['cargoDirectorio'] . "</td>
                                <td id='telefonoDirectorio" . $fila['idDirectorio'] . "'  >" . $fila['telefonoDirectorio'] . "</td>
                                <td id='extensionDirectorio" . $fila['idDirectorio'] . "'  >" . $fila['extensionDirectorio'] . "</td>
                                <td id='emailDirectorio" . $fila['idDirectorio'] . "'  >" . $fila['emailDirectorio'] . "</td>
                                <td id='activo" . $fila['idDirectorio'] . "' style='display:none!important;' >" . $fila['activo'] . "</td>
                                <td id='idPais" . $fila['idDirectorio'] . "' style='display:none!important;' >" . $fila['idPais'] . "</td>
                                <td id='idDepartamento" . $fila['idDirectorio'] . "' style='display:none!important;' >" . $fila['idDepartamento'] . "</td>";
                    if ($_COOKIE['cooDep'] == 12 && $_COOKIE['cooValidate'] == 1) {
                      echo "    <td>"; ?> 
                      <button type="button" class="btn btn-success edit" style="border-radius:50%; width:35px; height:35px; text-align:center;" value="<? echo $fila['idDirectorio'] ?>">
                    <i class="fas fa-edit" data-toggle="tooltip" title="Editar a <? echo $fila['nombreDirectorio'] ?> "></i></button> 
                    <? echo "</td>
                                <td> ";
                                                                                                                                          if ($fila['activo'] == 1) {
                                                                                                                                            ?>
                  <form name="formActiva" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="hidden" id="activated" name="activated" value="false">
                    <input type="hidden" id="desactivarItem" name="desactivarItem" value="true">
                    <input type="hidden" id="idDirectorio" name="idDirectorio" value="<? echo $fila['idDirectorio'] ?>">
                    <button type="submit" class="btn btn-success activar" style="color:green; background:none !important; border: 2px solid green;border-radius:50%; width:35px; height:35px;font-size:20px;">
                      <i class="fas fa-power-off" data-toggle="tooltip" title="Desactivar a <? echo $fila['nombreDirectorio'] ?>" style="margin-left:-6px;"></i></button>
                  </form>
                  <?

                      } else {
                        ?>
                  <form name="formDesActiva" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="hidden" id="activated" name="activated" value="true">
                    <input type="hidden" id="activarItem" name="activarItem" value="true">
                    <input type="hidden" id="idDirectorio" name="idDirectorio" value="<? echo $fila['idDirectorio'] ?>">
                    <button type="submit" class="btn btn-success activar" style="background:#fff; border: 1px solid #959c97;color:#959c97;text-align:center;border-radius:50%; width:35px; height:35px;font-size:20px; ">
                      <i class="fas fa-power-off" data-toggle="tooltip" title="Activar a <? echo $fila['nombreDirectorio'] ?>" style="margin-left:-5px;"></i></button>
                  </form>
                  <?
                      }
                      echo "</td> ";
                    }
                    echo "</tr>";
                  }

                  echo "
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class='skyBlue'>Nombre</th>
                                <th class='skyBlue'>Cargo</th>
                                <th class='skyBlue'>Teléfono</th>
                                <th class='skyBlue'>Extensión</th>
                                <th class='skyBlue'>eMail</th>
                                <th class='skyBlue' style='display:none !important'>Activo</th>
                                <th class='skyBlue' style='display:none !important'>Pais</th>
                                <th class='skyBlue' style='display:none !important'>Departamento</th>
                                
                                ";
                  if ($_COOKIE['cooDep'] == 12 && $_COOKIE['cooValidate'] == 1) {
                    echo "<th class='skyBlue'>Editar</a></th>
                                        <th class='skyBlue'>Activar</th>";
                  }

                  echo "
                            </tr>
                        </tfoot> </table>
                        
                        ";
                  ?>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end tagline -->

  <!-- Footer
 ================================================== -->
  <?php include("shared/footer.php"); ?>

  <script src="assets/js/jquery-1.8.2.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>

  <script src="assets/js/jquery.dataTables.min.js"></script>
  <script src="assets/js/jquery.dataExporta.min.js"></script>

  <?php $validateArea = $_COOKIE['cooDep'];
  echo "<script> $(document).ready( function () { $('#TableDirectory').DataTable( { 'paging':   true,  'ordering': false, 'info': true, 'bFilter':  true, 'dom': 'Bfrtip', buttons: [ { extend: 'pdf', text: 'Exportar a PDF', exportOptions: { modifier: { page: 'current' } } } ] } );  } );  </script> ";
  // if ($validateArea == 9 || $validateArea == 10 || $validateArea == 12) {
  //   echo "<script> $(document).ready( function () { $('#TableDirectory').DataTable( { 'paging':   true,  'ordering': false, 'info': true, 'bFilter':  true, 'dom': 'Bfrtip', buttons: [ { extend: 'pdf', text: 'Exportar a PDF', exportOptions: { modifier: { page: 'current' } } } ] } );  } );  </script> ";
  // }
  ?>

  <!-- Edit Modal-->
  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <center>
            <h4 class="modal-title" id="myModalLabel">Editar Directorio</h4>
          </center>
        </div>

      
        <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="modal-body">
          <input type="text" class="form-control" id="id" name="id">
            <input type="hidden" class="form-control" id="idDirectorio" name="idDirectorio" >
            <div class="container-fluid">

              <div class="col-12">
                <div class="col-6" style="width:50% !important ;float:left !important; ">
                  <div class="form-group input-group">
                    <span class="input-group-addon" >Nombre:</span>
                    <input type="text" class="form-control" id="nombreDirectorio" name="nombreDirectorio">
                  </div>
                </div>
                <div class="col-6" style="width:50% !important ;float:left !important; ">
                  <div class="form-group input-group">
                    <span class="input-group-addon">Cargo:</span>
                    <input type="text" class="form-control" id="cargoDirectorio" name="cargoDirectorio">
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="col-6" style="width:50% !important ;float:left !important; ">
                  <div class="form-group input-group">
                    <span class="input-group-addon">Telefono:</span>
                    <input type="text" class="form-control" id="telefonoDirectorio" name="telefonoDirectorio">
                  </div>
                </div>
                <div class="col-6" style="width:50% !important ;float:left !important; ">
                  <div class="form-group input-group">
                    <span class="input-group-addon">Extensión:</span>
                    <input type="text" class="form-control" id="extensionDirectorio" name="extensionDirectorio">
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="col-6" style="width:50% !important ;float:left !important; ">
                  <div class="form-group input-group">
                    <span class="input-group-addon">eMail:</span>
                    <input type="text" class="form-control" id="emailDirectorio" name="emailDirectorio">
                  </div>
                </div>
                <div class="col-6" style="width:50% !important ;float:left !important; ">
                  <div class="form-group input-group">
                    <span class="input-group-addon">Pais:</span>
                    <select id="idPais" name="idPais">
                      <?
                      $paises = $mysqli->query("SELECT * FROM Pais ");

                      while ($filaPaises = mysqli_fetch_array($paises)) {

                        ?>

                      <option value="<? echo $filaPaises['idPais'] ?>"><? echo $filaPaises['nombrePais'] ?></option>
                      <?

                      }
                      ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="col-6" style="width:50% !important ;float:left !important; ">
                  <div class="form-group input-group">
                    <span class="input-group-addon">Departamento:</span>
                    <select id="idDepartamento" name="idDepartamento">
                      <?
                      $deptos = $mysqli->query("SELECT * FROM Departamento ");

                      while ($filaDeptos = mysqli_fetch_array($deptos)) {

                        ?>

                      <option value="<? echo $filaDeptos['idDepartamento'] ?>"><? echo $filaDeptos['nombreDepartamento'] ?></option>
                      <?

                      }
                      ?>
                    </select>
                    <!-- <input type="text" class="form-control" id="idDepartamento" name="idDepartamento"> -->
                  </div>
                </div>
              </div>
              <div class="col-6" style="width:50% !important ;float:left !important; ">
                <div class="form-group input-group">
                  <span class="input-group-addon">Activo:</span>
                  <select class="form-control" id="activated" name="activated">
                    <option value="0">Inactivo</option>
                    <option value="1">Activo</option>
                  </select>
                </div>
              </div>
            </div>
          </div>






      </div>
    </div>
    <div class="modal-footer">

      <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> </i> Actualizar</button>
    </div>

    </form>

  </div>
  </div>
  </div>
  <!-- /.modal -->

  <script>
    function areaFunction() {
      //var selectOpt = document.getElementById("areaOpt").selectedIndex;
      //document.cookie = "directorioOptValue = " + selectOpt;

      //var directorioOptValue = document.getElementById("areaOpt").value;
      //document.cookie = "directorioOptName = " + directorioOptValue;

      var selectOpt = document.getElementById("areaOpt").value;
      document.cookie = "directorioOptValue = " + selectOpt;

      var directorioOptValue = $("#areaOpt option:selected").text();
      document.cookie = "directorioOptName = " + directorioOptValue;

      window.location.href = "directory.php?vDir=" + selectOpt;
    }
  </script>

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
    $(document).ready(function() {
      $(document).on('click', '.edit', function() {
        var idDirectorio = $(this).val();


        var id = $(this).val();
        var nombreDirectorio = $('#nombreDirectorio' + idDirectorio).text();
        var cargoDirectorio = $('#cargoDirectorio' + idDirectorio).text();
        var telefonoDirectorio = $('#telefonoDirectorio' + idDirectorio).text();
        var extensionDirectorio = $('#extensionDirectorio' + idDirectorio).text();
        var emailDirectorio = $('#emailDirectorio' + idDirectorio).text();
        var idPais = $('#idPais' + idDirectorio).text();
        var idDepartamento = $('#idDepartamento' + idDirectorio).text();
        var activo = $('#activo' + idDirectorio).text();


        $('#edit').modal('show');
        $('#id').val(id);
        $('#idDirectorio').val(idDirectorio);
        $('#nombreDirectorio').val(nombreDirectorio);
        $('#cargoDirectorio').val(cargoDirectorio);
        $('#telefonoDirectorio').val(telefonoDirectorio);
        $('#extensionDirectorio').val(extensionDirectorio);
        $('#emailDirectorio').val(emailDirectorio);
        $('#idPais').val(idPais);
        $('#idDepartamento').val(idDepartamento);
        $('#activated').val(activo);
          // alert(id);

      });
    });
  </script>
  <script>
    $(document).ready(function() {

      document.getElementById("edit").style.property = "block";
    });
  </script>
  <!-- <script>
  function  activatedStatus (id,status){
  if(status == true) {
    console.log( "Verdadero   " + id);
    console.log(status);

    
  } else{
    console.log("Falso   " + id);
    console.log(status);

  }
}
  </script> -->




</body>

</html>