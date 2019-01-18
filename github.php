<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Curso Udemy PHP 7 - Github</title>
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
            <h1>Github</h1>
          </div>

          <!-- BEGIN: Exemplos -->
            <h4>Exemplos</h4>

            <!-- BEGIN: .panel -->
            <div class="panel panel-primary">
              <div class="panel-heading"><a href="" id="tiposBasicos"></a>Criar um repositório Git</div>
              <div class="panel-body">

                <h2>
                  <small>// <code>GIT</code>: <br>
                  </small>
                </h2>

                <!-- Documentação -->
                <!-- <h4>Segue alguns links para consulta:<br></h4>
                  <h4><small>Stack Overflow:<code> <a href="LINK" target="_blank">LINK</a></code></small></h4>
                  <h4><small>Stack Overflow 2:<code> <a href="LINK" target="_blank">LINK</a></code></small></h4><br> -->

                <div class='well well-sm'>
                  <strong>Passo 1: </strong> <br>

                  Clicar com botão direito do mouse no diretório do Projeto, depois <code>Git Bash Here</code> abrirá o terminal do <code>GIT</code><br><br>

                  <pre><strong>Cria a pasta oculta do .git</strong>
                    <code class="Nginx">
                      $ git init
                    </code>
                  </pre> <br>

                  <strong>Passo 2: </strong> <br>
                    Vá no seu <code>GITHUB</code> e crie um repositório.<br><br>
                </div><!-- End: .well well-sm -->

                <div class='well well-sm'>
                  <strong>Passo 3: </strong> <br>
                    Depois de ter criado um repositório cópie o link <code>HTTPS</code> do repositório.<br><br>

                  <pre><strong>Cópie o link HTTPS do seu repositório</strong>
                    <code class="Nginx">
                      $ git remote add origin https://github.com/seuUsuario/seuRepositorio
                    </code>
                  </pre>
                </div><!-- End: .well well-sm -->

                <div class='well well-sm'>
                  <strong>Passo 4: </strong> <br><br>

                  <pre><strong>Isso faz com que baixe os arquivos do repositório</strong>
                    <code class="Nginx">
                      $ git pull origin master
                    </code>
                  </pre>
                </div><!-- End: .well well-sm -->

                <div class='well well-sm'>
                  <strong>Passo 5: </strong> <br><br>

                  <pre><strong>Isso faz com que tudo o que foi criado, deletado, renomeado vai ser enviado ao staging area</strong>
                    <code class="Nginx">
                      $ git add --all
                    </code>
                  </pre>
                </div><!-- End: .well well-sm -->

                <div class='well well-sm'>
                  <strong>Passo 6: </strong> <br><br>

                  <pre><strong>Isso faz com que adcione uma descrição</strong>
                    <code class="Nginx">
                      $ git commit -m "Iniciamos o projeto"
                    </code>
                  </pre>
                </div><!-- End: .well well-sm -->

                <div class='well well-sm'>
                  <strong>Passo 7: </strong> <br><br>

                  <pre><strong>Isso faz com que atualize os arquivos ao repositório (Servidores do Github).
È solicitado quando outra pessoa da equipe tenha auterado um arquivo no repositório.</strong>
                    <code class="Nginx">
                      $ git pull origin master
                    </code>
                  </pre>
                </div><!-- End: .well well-sm -->

                <div class='well well-sm'>
                  <strong>Passo 8: </strong> <br><br>

                  <pre><strong>Isso faz com que envie os arquivos ao repositório (Servidores do Github)</strong>
                    <code class="Nginx">
                      $ git push origin master
                    </code>
                  </pre>
                </div><!-- End: .well well-sm -->

                <div class='well well-sm'>
                  <strong>Passo 9: </strong> <br><br>

                  <pre><strong>Adcione seu Usuário/E-mail e Senha do Github</strong>
                    <code class="Nginx">
                      Username for 'https://github.com':Seu Usuario ou E-mail do Git
                      Password for 'https://github.com/SeuUsuario': Digite aqui sua senha
                    </code>
                  </pre>
                </div><!-- End: .well well-sm -->

              </div> <!-- End: .panel-body -->
            </div> <!-- End: .panel panel-primary -->
            <!-- END: .panel -->

            <!-- END: Exemplos -->

            <!-- Menu Button -->
          <button class="menu-btn">&#9776; Menu</button>
        </div><!-- End: Content -->

        <?php require_once ("footer.php"); ?>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

        <script>hljs.initHighlightingOnLoad();</script>

        <!-- Pushy JS -->
        <script src="assets/pushyMenu/js/pushy.min.js"></script>

    </body>
</html>
