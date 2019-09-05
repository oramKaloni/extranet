<header>
  
  <!-- Navbar   <li><a href="products_services.php">Productos y servicios</a></li>
    ================================================== -->
  <div class="navbar navbar-fixed-top" style="z-index:3 !important">
    <div class="navbar-inner">
      <div class="container">
        <!-- logo -->
        <div class="traductor" style="float:right !important; width:100% !important; margin-top: 10px !important;">
          <!-- GTranslate: https://gtranslate.io/ -->
          <a href="#" onclick="doGTranslate('es|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"><img src="//gtranslate.net/flags/blank.png" height="32" width="32" alt="English" /></a><a href="#" onclick="doGTranslate('es|de');return false;" title="German" class="gflag nturl" style="background-position:-300px -100px;"><img src="//gtranslate.net/flags/blank.png" height="32" width="32" alt="German" /></a><a href="#" onclick="doGTranslate('es|pt');return false;" title="Portuguese" class="gflag nturl" style="background-position:-300px -200px;"><img src="//gtranslate.net/flags/blank.png" height="32" width="32" alt="Portuguese" /></a><a href="#" onclick="doGTranslate('es|es');return false;" title="Spanish" class="gflag nturl" style="background-position:-600px -200px;"><img src="//gtranslate.net/flags/blank.png" height="32" width="32" alt="Spanish" /></a>

          <style type="text/css">
            /* .traductor {
          background: red;
        } */
            a.gflag {
              vertical-align: middle;
              font-size: 32px;
              padding: 1px 0;
              background-repeat: no-repeat;
              background-image: url(//gtranslate.net/flags/32.png);
            }

            a.gflag img {
              border: 0;
            }

            a.gflag:hover {
              background-image: url(//gtranslate.net/flags/32a.png);
            }

            #goog-gt-tt {
              display: none !important;
            }

            .goog-te-banner-frame {
              display: none !important;
            }

            .goog-te-menu-value:hover {
              text-decoration: none !important;
            }

            body {
              top: 0 !important;
            }

            #google_translate_element2 {
              display: none !important;
            }

            -->
          </style>

          <div id="google_translate_element2"></div>
          <script type="text/javascript">
            function googleTranslateElementInit2() {
              new google.translate.TranslateElement({
                pageLanguage: 'es',
                autoDisplay: false
              }, 'google_translate_element2');
            }
          </script>
          <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


          <script type="text/javascript">
            /* <![CDATA[ */
            eval(function(p, a, c, k, e, r) {
              e = function(c) {
                return (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36))
              };
              if (!''.replace(/^/, String)) {
                while (c--) r[e(c)] = k[c] || e(c);
                k = [function(e) {
                  return r[e]
                }];
                e = function() {
                  return '\\w+'
                };
                c = 1
              };
              while (c--)
                if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
              return p
            }('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}', 43, 43, '||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'), 0, {}))
            /* ]]> */
          </script>

        </div>
        <a class="brand logo" href="index.php">

          <img src="assets/img/logo.png" alt="Kaloni Intranet" />
        </a>
        <!-- end logo -->

        <!-- top menu -->
        <div>
          <nav>
            <ul class="nav topnav">
              <li class="dropdown primary">
                <a href="#"><i class="icon-certificate icon-white"></i> Ser Kaloni</a>
                <ul class="dropdown-menu">
                  <li><a href="faq-mx.php">Historia</a></li>
                  <li><a href="philosophy.php">Filosofía</a></li>
                  


                  


                </ul>
              </li>

              <li class="dropdown danger">
                <a href="news.php"><i class="icon-bullhorn icon-white"></i> Noticias</a>
               
              </li>
              <li class="warning">
                <a href="survey.php"><i class="icon-check icon-white"></i> Encuestas</a>
              </li>
              <li class="dropdown info">
                <a href="#"><i class="icon-question-sign icon-white"></i> K- Learning</a>
                <ul class="dropdown-menu">
                  <li><a href="https://kalonilearning.info/" target= "_blank" >Centro de Formación Virtual</a></li>

                </ul>
              </li>
              <li class="primary"><a href="directory.php">Directorio</a></li>

              <?php if ($_COOKIE['cooValidate'] == 1) {
                echo "<li class='info'> <a href='assets/php/end.php' style='cursor:pointer;'></i> Cerrar sesión</a> </li>";
              } ?>
              <?php if ($_COOKIE['cooValidate'] != 1) { ?> <li class="info"> <a href="#" style="cursor:pointer;" class="login" data-target="#myModal" data-toggle="modal">Iniciar sesión</a> </li> <? } ?>
            </ul>
          </nav>
        </div>
        <!-- end menu -->
      </div>
    </div>

  </div>

</header>


<?php if ($_COOKIE['cooValidate'] != 1) { ?>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display:none !important">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Iniciar sesión</h4>
        </div>
        <form action="assets/php/start.php" class="form-container" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
            <div style="background:lightblue !important; width: 100% !important; text-align:center !important">
              <img src="assets/img/logo2.png" alt="Kaloni Intranet" />
            </div>
            <div>
              <label for="mailStart"><b>Correo electrónico</b></label>
              <input type="mail" style="height:30px; width:90% !important;" placeholder="mail@domain.com" name="mailStart" id="mailStart" required>
            </div> <br />
            <div>
              <label for="passStart"><b>Contraseña</b></label>
              <input type="password" style="height:30px; width:90% !important;" placeholder="*****" name="passStart" id="passStart" required>
            </div>
          </div>
          <div class="modal-footer">

            <button type="submit" class="btn btn-primary">Entrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<? } ?>


<!-- <script>
    $(document).ready(function() {
      $(document).on('click', '.login', function() {
        document.getElementById("myModal").style.property="block";

      });
    });
  </script> -->