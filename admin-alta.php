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

  <style>
    select,
    textarea,
    input[type="text"],
    input[type="password"],
    input[type="datetime"],
    input[type="datetime-local"],
    input[type="date"],
    input[type="month"],
    input[type="time"],
    input[type="week"],
    input[type="number"],
    input[type="email"],
    input[type="url"],
    input[type="search"],
    input[type="tel"],
    input[type="color"],
    .uneditable-input {
      width: -webkit-fill-available;
    }

    @media (max-width: 979px) and (min-width: 768px) {

      select,
      textarea,
      input[type="text"],
      input[type="password"],
      input[type="datetime"],
      input[type="datetime-local"],
      input[type="date"],
      input[type="month"],
      input[type="time"],
      input[type="week"],
      input[type="number"],
      input[type="email"],
      input[type="url"],
      input[type="search"],
      input[type="tel"],
      input[type="color"],
      .uneditable-input {
        font-size: smaller;
      }
    }
  </style>

</head>

<body>
<?php 
include("assets/get_ip.php");
$ipClient = getRealIP();
include("assets/redirect.php");
include("shared/header.php");
 ?>

  <section id="maincontent">
    <div class="container">
      <br /><br /><br /><br />
      <h1 class="skyBlue" align="center">Dar de alta a un colaborador</h1> <br />
      <form action="assets/php/sendAlta.php" class="form-container" method="POST" enctype="multipart/form-data">
        <br /><br />
        <h4 class="skyBlueDark">Datos Generales</h4> <br />
        <div class="row-fluid">
          <div class='span3'>
            <select id="movAlta" name="movAlta">
              <option value="">-- Tipo de Movimiento --</option>
              <option value="Reemplazo">Reemplazo</option>
              <option value="Nuevo">Nuevo</option>
              <option value="Becario">Becario</option>
            </select>
          </div>
          <div class='span3'>
            <input type="text" placeholder="Nombre completo de reemplazo" name="reeAlta" id="reeAlta" required>
          </div>
          <div class='span3'>
            <input type="text" placeholder="Nombre completo de alta" name="nomAlta" id="nomAlta" required>
          </div>
          <div class='span3'>
            <input type="text" placeholder="Fecha ingreso" name="fecAlta" id="fecAlta" onfocus="(this.type='date')" required>
          </div>
        </div> <br />
        <div class="row-fluid">
          <div class='span3'>
            <input type="text" placeholder="Puesto o cargo" name="pueAlta" id="pueAlta" required>
          </div>
          <div class='span3'>
            <select name="areAlta" id="areAlta" required>
              <option value="">-- Selecciona un departamento --</option>
              <option value="Dirección General">Dirección General</option>
              <option value="Dirección Governance">Dirección Governance</option>
              <option value="Calidad">Calidad</option>
              <option value="Dirección de proyectos">Dirección de proyectos</option>
              <option value="Finanzas">Finanzas</option>
              <option value="Mercadotecnia">Mercadotecnia</option>
              <option value="Nuevos negocios">Nuevos negocios</option>
              <option value="Operaciones">Operaciones</option>
              <option value="Recursos Humanos">Recursos humanos</option>
              <option value="Tecnología">Tecnología</option>
              <option value="K Center">K Center</option>
              <option value="IT">IT</option>
              <option value="Recepción">Recepción</option>
              <option value="Enfermería">Enfermería</option>
            </select>
          </div>
          <div class='span3'>
            <input type="text" placeholder="Oficina principal" name="ofiAlta" id="ofiAlta" required>
          </div>
          <div class='span3'>
            <select id="genAlta" name="genAlta">
              <option value="">-- Género --</option>
              <option value="Femenino">Femenino</option>
              <option value="Masculino">Masculino</option>
            </select>
          </div>
        </div> <br />
        <div class="row-fluid">
          <div class='span3'>
            <input type="text" placeholder="Fecha nacimiento" name="fnaAlta" id="fnaAlta" onfocus="(this.type='date')" required>
          </div>
          <div class='span3'>
            <input type="text" placeholder="Nacionalidad" name="nacAlta" id="nacAlta" required>
          </div>
          <div class='span3'>
            <input type="text" placeholder="Cédula profesional" name="cedAlta" id="cedAlta" required>
          </div>
          <div class='span3'>
            <input type="text" placeholder="No. de Seguridad Social" name="nssAlta" id="nssAlta" required>
          </div>
        </div> <br />

        <div class="row-fluid">
          <div class='span3'>
            <p class="skyBlue"><b>Acceso NetSuite</b> <br />
              <input type="radio" name="usuAlta" id="usuAlta" value="Sí"> Sí <br />
              <input type="radio" name="usuAlta" id="usuAlta" value="No"> No
            </p>
          </div>
          <div class='span3'>
            <p class="skyBlue"><b>Registro de lector biométrico</b> <br />
              <input type="radio" name="regAlta" id="regAlta" value="Sí"> Sí <br />
              <input type="radio" name="regAlta" id="regAlta" value="No"> No
            </p>
          </div>
          <div class='span3'>
            <p class="skyBlue"><b>Cuenta de correo</b> <br />
              <input type="radio" name="cueAlta" id="cueAlta" value="Sí"> Sí <br />
              <input type="radio" name="cueAlta" id="cueAlta" value="No"> No
            </p>
          </div>
          <div class='span3'>
            <p class="skyBlue"><b>Laptop/equipo de escritorio</b> <br />
              <input type="radio" name="lapAlta" id="lapAlta" value="Sí"> Sí <br />
              <input type="radio" name="lapAlta" id="lapAlta" value="No"> No
            </p>
          </div>
        </div> <br />
        <div class="row-fluid">
          <div class='span3'>
            <p class="skyBlue"><b>Diadema</b> <br />
              <input type="radio" name="diaAlta" id="diaAlta" value="Sí"> Sí <br />
              <input type="radio" name="diaAlta" id="diaAlta" value="No"> No
            </p>
          </div>
          <div class='span3'>
            <p class="skyBlue"><b>Aparato Teléfono/Extensión</b> <br />
              <input type="radio" name="apaAlta" id="apaAlta" value="Sí"> Sí <br />
              <input type="radio" name="apaAlta" id="apaAlta" value="No"> No
            </p>
          </div>
          <div class='span3'>
            <p class="skyBlue"><b>Celular</b> <br />
              <input type="radio" name="celAlta" id="celAlta" value="Sí"> Sí <br />
              <input type="radio" name="celAlta" id="celAlta" value="No"> No
            </p>
          </div>
          <div class='span3'>
            <p class="skyBlue"><b>Convenio de confidencialidad</b> <br />
              <input type="radio" name="conAlta" id="conAlta" value="Sí"> Sí <br />
              <input type="radio" name="conAlta" id="conAlta" value="No"> No
            </p>
          </div>
        </div> <br />

        <div class="row-fluid">
          <div class='span3'>
            <p class="skyBlue"><b>Espacio trabajo asignado</b> <br />
              <input type="radio" name="espAlta" id="espAlta" value="Sí"> Sí <br />
              <input type="radio" name="espAlta" id="espAlta" value="No"> No
            </p>
          </div>
          <div class='span3'>
            <p class="skyBlue"><b>Uniforme</b> <br />
              <input type="radio" name="uniAlta" id="uniAlta" value="Sí"> Sí <br />
              <input type="radio" name="uniAlta" id="uniAlta" value="No"> No
            </p>
          </div>
          <div class='span3'>
            <p class="skyBlue"><b>Viáticos</b> <br />
              <input type="radio" name="viaAlta" id="viaAlta" value="Sí"> Sí <br />
              <input type="radio" name="viaAlta" id="viaAlta" value="No"> No
            </p>
          </div>
          <div class='span3'>
            <p class="skyBlue"><b>Vales de comida</b> <br />
              <input type="radio" name="valAlta" id="valAlta" value="Sí"> Sí <br />
              <input type="radio" name="valAlta" id="valAlta" value="No"> No
            </p>
          </div>
        </div> <br />

        <div class="row-fluid">
          <div class='span12'>
            <p></p><br />
            <center><button type="submit" class="btn btn-primary">Registrar</button></center>
          </div>
        </div>
      </form>
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