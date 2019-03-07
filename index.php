<?php
session_start();
ob_start(); // Inicie o buffer de saída
?>
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

          <!-- BEGIN: Exemplos -->
          <?php
            $valor = @$_GET['pg'];

            // echo "$valor";

            if (!isset($valor)) {require_once('navegaçãoAulas.php');}          

            if ($valor == 'exemplo-01') {require_once('exemplo-01.php');}
            if ($valor == 'exemplo-02') {require_once('exemplo-02.php');}
            if ($valor == 'exemplo-03') {require_once('exemplo-03.php');}
            if ($valor == 'exemplo-04') {require_once('exemplo-04.php');}
            if ($valor == 'exemplo-05') {require_once('exemplo-05.php');}
            if ($valor == 'exemplo-06') {require_once('exemplo-06.php');}
            if ($valor == 'exemplo-07') {require_once('exemplo-07.php');}
            if ($valor == 'exemplo-08') {require_once('exemplo-08.php');}
            if ($valor == 'exemplo-09') {require_once('exemplo-09.php');}
            if ($valor == 'exemplo-10') {require_once('exemplo-10.php');}

            if ($valor == 'exemplo-11') {require_once('exemplo-11.php');}
            if ($valor == 'exemplo-12') {require_once('exemplo-12.php');}
            if ($valor == 'exemplo-13') {require_once('exemplo-13.php');}
            if ($valor == 'exemplo-14') {require_once('exemplo-14.php');}
            if ($valor == 'exemplo-15') {require_once('exemplo-15.php');}
            if ($valor == 'exemplo-16') {require_once('exemplo-16.php');}
            if ($valor == 'exemplo-17') {require_once('exemplo-17.php');}
            if ($valor == 'exemplo-18') {require_once('exemplo-18.php');}
            if ($valor == 'exemplo-19') {require_once('exemplo-19.php');}
            if ($valor == 'exemplo-20') {require_once('exemplo-20.php');}

            if ($valor == 'exemplo-21') {require_once('exemplo-21.php');}
            if ($valor == 'exemplo-22') {require_once('exemplo-22.php');}
            if ($valor == 'exemplo-23') {require_once('exemplo-23.php');}
            if ($valor == 'exemplo-24') {require_once('exemplo-24.php');}
            if ($valor == 'exemplo-25') {require_once('exemplo-25.php');}
            if ($valor == 'exemplo-26') {require_once('exemplo-26.php');}
            if ($valor == 'exemplo-27') {require_once('exemplo-27.php');}
            if ($valor == 'exemplo-28') {require_once('exemplo-28.php');}
            if ($valor == 'exemplo-29') {require_once('exemplo-29.php');}
            if ($valor == 'exemplo-30') {require_once('exemplo-30.php');}

            if ($valor == 'exemplo-31') {require_once('exemplo-31.php');}
            if ($valor == 'exemplo-32') {require_once('exemplo-32.php');}
            if ($valor == 'exemplo-33') {require_once('exemplo-33.php');}
            if ($valor == 'exemplo-34') {require_once('exemplo-34.php');}
            if ($valor == 'exemplo-35') {require_once('exemplo-35.php');}
            if ($valor == 'exemplo-36') {require_once('exemplo-36.php');}
            if ($valor == 'exemplo-37') {require_once('exemplo-37.php');}
            if ($valor == 'exemplo-38') {require_once('exemplo-38.php');}
            if ($valor == 'exemplo-39') {require_once('exemplo-39.php');}
            if ($valor == 'exemplo-40') {require_once('exemplo-40.php');}


            if ($valor == 'exemplo-41') {require_once('exemplo-41.php');}
            if ($valor == 'exemplo-42') {require_once('exemplo-42.php');}
            if ($valor == 'exemplo-43') {require_once('exemplo-43.php');}
            if ($valor == 'exemplo-44') {require_once('exemplo-44.php');}
            if ($valor == 'exemplo-45') {require_once('exemplo-45.php');}
            if ($valor == 'exemplo-46') {require_once('exemplo-46.php');}
            if ($valor == 'exemplo-47') {require_once('exemplo-47.php');}
            if ($valor == 'exemplo-48') {require_once('exemplo-48.php');}
            if ($valor == 'exemplo-49') {require_once('exemplo-49.php');}
            if ($valor == 'exemplo-50') {require_once('exemplo-50.php');}

            if ($valor == 'exemplo-51') {require_once('exemplo-51.php');}
            if ($valor == 'exemplo-52') {require_once('exemplo-52.php');}
            if ($valor == 'exemplo-53') {require_once('exemplo-53.php');}
            if ($valor == 'exemplo-54') {require_once('exemplo-54.php');}
            if ($valor == 'exemplo-55') {require_once('exemplo-55.php');}
            if ($valor == 'exemplo-56') {require_once('exemplo-56.php');}
            if ($valor == 'exemplo-57') {require_once('exemplo-57.php');}
            if ($valor == 'exemplo-58') {require_once('exemplo-58.php');}
            if ($valor == 'exemplo-59') {require_once('exemplo-59.php');}
            if ($valor == 'exemplo-60') {require_once('exemplo-60.php');}

            if ($valor == 'exemplo-61') {require_once('exemplo-61.php');}
            if ($valor == 'exemplo-62') {require_once('exemplo-62.php');}
            if ($valor == 'exemplo-63') {require_once('exemplo-63.php');}
            if ($valor == 'exemplo-64') {require_once('exemplo-64.php');}
            if ($valor == 'exemplo-65') {require_once('exemplo-65.php');}
            if ($valor == 'exemplo-66') {require_once('exemplo-66.php');}
            if ($valor == 'exemplo-67') {require_once('exemplo-67.php');}
            if ($valor == 'exemplo-68') {require_once('exemplo-68.php');}
            if ($valor == 'exemplo-69') {require_once('exemplo-69.php');}
            if ($valor == 'exemplo-70') {require_once('exemplo-70.php');}  

            if ($valor == 'exemplo-71') {require_once('exemplo-71.php');}
            if ($valor == 'exemplo-72') {require_once('exemplo-72.php');}
            if ($valor == 'exemplo-73') {require_once('exemplo-73.php');}
            if ($valor == 'exemplo-74') {require_once('exemplo-74.php');}
            if ($valor == 'exemplo-75') {require_once('exemplo-75.php');}
            if ($valor == 'exemplo-76') {require_once('exemplo-76.php');}
            if ($valor == 'exemplo-77') {require_once('exemplo-77.php');}
            if ($valor == 'exemplo-78') {require_once('exemplo-78.php');}
            if ($valor == 'exemplo-79') {require_once('exemplo-79.php');}
            if ($valor == 'exemplo-80') {require_once('exemplo-80.php');}


            if ($valor == 'modelo-controle-Versao') {require_once('modelo-controle-Versao.php');}
            if ($valor == 'github') {require_once('github.php');}
            if ($valor == 'admin') {require_once('admin.php');}
          ?>
          <!-- End: Exemplos -->

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
