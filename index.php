<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Curso Udemy PHP 7 - Hcode</title>
        <meta name="description" content="Pushy is an off-canvas navigation menu for your website.">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

        <!-- Bootstrap -->
        <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="estilo.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="assets/highlight/styles/monokai-sublime.css">
        <script src="assets/highlight/highlight.pack.js"></script>

        <!-- Menu Pushy -->
        <link rel="stylesheet" href="assets/pushyMenu/css/normalize.css">
        <link rel="stylesheet" href="assets/pushyMenu/css/demo.css">
        <!-- Pushy CSS -->
        <link rel="stylesheet" href="assets/pushyMenu/css/pushy.css">
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    </head>
    <body>

        <!-- Begin: Pushy Menu -->
          <?php require_once ("header.php"); ?>
          <?php require_once ("menu.php"); ?>
        <!-- End: Pushy Menu -->

        <!-- Site Overlay -->
        <div class="site-overlay"></div>

        <!-- Begin: Content -->
        <div id="container">
          <!-- Menu Button -->
          <button class="menu-btn">&#9776; Menu</button>

          <div class="page-header">
            <h1>Navegação das Aulas</h1>
          </div>

          <!-- BEGIN: Exemplos -->

          <!-- Begin: Painel grupo Lista -->
          <div class=panel-group role=tablist>
            <div class="panel panel-primary">
              <div class=panel-heading role=tab id=collapseListGroupHeading1>
                <h4 class=panel-title>
                  <a href=#collapseListGroup1 class=collapsed role=button data-toggle=collapse aria-expanded=false aria-controls=collapseListGroup1> 
                    Variáveis
                  </a>
                </h4>
              </div>
              <div class="collapse in panel-collapse" role=tabpanel id=collapseListGroup1 aria-labelledby=collapseListGroupHeading1>
                <ul class=list-group>
                  <li class=list-group-item><a href="exemplo-01.php">Exemplo 1 - Variável</a></li>
                  <li class=list-group-item><a href="exemplo-02.php">Exemplo 2 - Padrôes de Variáveis</a></li>
                  <li class=list-group-item><a href="exemplo-03.php">Exemplo 3 - Tipos de dados no PHP (8 tipos) <span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span></a></li>
                  <li class=list-group-item><a href="exemplo-04.php">Exemplo 4 - Variáveis Pré-definida (Arrays Super Globais)</a></li>
                  <li class=list-group-item><a href="exemplo-05.php">Exemplo 5 - Escopo de Variáveis</a></li>
                </ul>
                <!-- <div class=panel-footer>Footer</div> -->
              </div>
            </div>
          </div>
          <!-- End: Painel grupo Lista -->

          <!-- Begin: Painel grupo Lista -->
          <div class=panel-group role=tablist>
            <div class="panel panel-primary">
              <div class=panel-heading role=tab id=collapseListGroupHeading1>
                <h4 class=panel-title>
                  <a href=#collapseListGroup2 class=collapsed role=button data-toggle=collapse aria-expanded=false aria-controls=collapseListGroup1> 
                    Conhecendo os Operadores do PHP
                  </a>
                </h4>
              </div>
              <div id=collapseListGroup2 class="collapse in panel-collapse" role=tabpanel aria-labelledby=collapseListGroupHeading1>
                <ul class=list-group>
                  <li class=list-group-item><a href="exemplo-06.php">Exemplo 6 - Operadores do PHP</a></li>
                </ul>
                <!-- <div class=panel-footer>Footer</div> -->
              </div>
            </div>
          </div>
          <!-- End: Painel grupo Lista -->

          <!-- Begin: Painel grupo Lista -->
          <div class=panel-group role=tablist>
            <div class="panel panel-primary">
              <div class=panel-heading role=tab id=collapseListGroupHeading1>
                <h4 class=panel-title>
                  <a href=#collapseListGroup3 class=collapsed role=button data-toggle=collapse aria-expanded=false aria-controls=collapseListGroup1> 
                    Strings
                  </a>
                </h4>
              </div>
              <div id=collapseListGroup3 class="collapse in panel-collapse" role=tabpanel aria-labelledby=collapseListGroupHeading1>
                <ul class=list-group>
                  <a href="exemplo-07.php"><li class=list-group-item>Exemplo 7 - Strings em PHP</li></a>
                </ul>
                <!-- <div class=panel-footer>Footer</div> -->
              </div>
            </div>
          </div>
          <!-- End: Painel grupo Lista -->

          <!-- Begin: Painel grupo Lista -->
          <div class=panel-group role=tablist>
            <div class="panel panel-primary">
              <div class=panel-heading role=tab id=collapseListGroupHeading1>
                <h4 class=panel-title>
                  <a href=#collapseListGroup4 class=collapsed role=button data-toggle=collapse aria-expanded=false aria-controls=collapseListGroup1> 
                    Incluide | Require
                  </a>
                </h4>
              </div>
              <div id=collapseListGroup4 class="collapse in panel-collapse" role=tabpanel aria-labelledby=collapseListGroupHeading1>
                <ul class=list-group>
                  <li class=list-group-item><a href="exemplo-08.php">Exemplo 8 - Incluindo arquivos com Include</a></li>
                  <li class=list-group-item><a href="exemplo-09.php">Exemplo 9 - Incluindo arquivos com Require</a></li>
                </ul>
                <!-- <div class=panel-footer>Footer</div> -->
              </div>
            </div>
          </div>
          <!-- End: Painel grupo Lista -->

          <!-- Begin: Painel grupo Lista -->
          <!-- <div class=panel-group role=tablist>
            <div class="panel panel-primary">
              <div class=panel-heading role=tab id=collapseListGroupHeading1>
                <h4 class=panel-title>
                  <a href=#collapseListGroupM class=collapsed role=button data-toggle=collapse aria-expanded=false aria-controls=collapseListGroup1> 
                    Modelo
                  </a>
                </h4>
              </div>
              <div id=collapseListGroupM class="collapse in panel-collapse" role=tabpanel aria-labelledby=collapseListGroupHeading1>
                <ul class=list-group>
                  <li class=list-group-item>Modelo</li>
                  <li class=list-group-item>Modelo</li>
                  <li class=list-group-item>Modelo</li>
                  <li class=list-group-item>Modelo</li>
                  <li class=list-group-item>Modelo</li>
                  <li class=list-group-item>Modelo</li>
                </ul>
                <div class=panel-footer>Footer</div>
              </div>
            </div>
          </div> -->
          <!-- End: Painel grupo Lista -->

            <!-- Menu Button -->
          <button class="menu-btn">&#9776; Menu</button>
        </div><!-- End: Content -->

        <?php require_once "footer.php"; ?>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

        <script>hljs.initHighlightingOnLoad();</script>

        <!-- Pushy JS -->
        <script src="assets/pushyMenu/js/pushy.min.js"></script>

    </body>
</html>
