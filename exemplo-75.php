<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Trabalhando com E-mails usando a classe PHPMailer";
  $tituloAula = "Enviando Email com PHPMailer";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
  <h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a><?=$tituloAula?></div>
    <div class="panel-body">

      <h2>
        <small>// <code>PHPMailer</code>: Uma classe de criação e transferência de e-mail completa para PHP
        </small><br>
      </h2>

      <!-- Documentação -->
      <h4>Segue links para consulta:<br></h4>
      <h4>
        <small>PHPMailer:<code> <a href="https://github.com/PHPMailer/PHPMailer" target="_blank">https://github.com/PHPMailer/PHPMailer</a></code>
        </small>
      </h4>

      <div class='well well-sm'>
        <strong>Condições: </strong> <br>
        Enviar E-mail usando a biblioteca PHPMail e utilizando o servidor do Gmail.<br>

        <strong>Sintaxe da <code>$mail = new PHPMailer;</code> </strong><br><br>
      </div> <!-- End: .well well-sm -->

      <pre><strong>Arquivo do Composer</strong>
        <code class="json">
          {
            "require":{
              "phpmailer/phpmailer":"~6.0"
            }
          }
        </code>
        </pre>

      <pre><strong>Visualizando script PHPMailer | Gmail</strong>
        <code class="php">
        require_once("vendor/autoload.php");

        /**
         * This example shows settings to use when sending via Google's Gmail servers.
         * This uses traditional id & password authentication - look at the gmail_xoauth.phps
         * example to see how to use XOAUTH2.
         * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
         */

        //Import PHPMailer classes into the global namespace
        use PHPMailer\PHPMailer\PHPMailer;

        //Create a new PHPMailer instance
        $mail = new PHPMailer;

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 2;

        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6

        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;

        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';

        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;

        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = "seuEmail@gmail.com";

        //Password to use for SMTP authentication
        $mail->Password = "suaSenha";

        //Set who the message is to be sent from
        $mail->setFrom('seuEmail@gmail.com', 'NomeDeQuemEnvia');

        //Set an alternative reply-to address
        $mail->addReplyTo('replyto@example.com', 'First Last');

        //Set who the message is to be sent to
        $mail->addAddress('emailQueVaiReceber@gmail.com', 'NomeDeQuemRecebe');

        //Set the subject line
        $mail->Subject = 'Assunto do E-mail';

        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $mail->msgHTML(file_get_contents('contents.html'), __DIR__);

        //Replace the plain text body with one created manually
        $mail->AltBody = 'This is a plain-text message body';

        //Attach an image file
        $mail->addAttachment('images/imagemQueVaiEmAnexo.jpg');

        //send the message, check for errors
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
            //Section 2: IMAP
            //Uncomment these to save your message in the 'Sent Mail' folder.
            #if (save_mail($mail)) {
            #    echo "Message saved!";
            #}
        }

        //Section 2: IMAP
        //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
        //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
        //You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
        //be useful if you are trying to get this working on a non-Gmail IMAP server.
        function save_mail($mail)
        {
            //You can change 'Sent Mail' to any other folder or tag
            $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

            //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
            $imapStream = imap_open($path, $mail->Username, $mail->Password);

            $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
            imap_close($imapStream);

            return $result;
        }
        </code>
      </pre>

      <div class='well well-sm'>
        <strong>Resultado <code>PHPMailer</code>:</strong><br>

        <div id="email"></div>                 
        <?php 
        //Recebe valor da pagina de envio de e-mail
        if (isset($_GET['m'])) {
          // echo $_GET['m'];
          echo "<br><div class=\"alert alert-info\" role=\"alert\"><strong>E-mail</strong> enviado com sucesso!</div>";
        }                    
        ?>

        <form method="GET">
          <div class="row">
            <div class="col-sm-8">
              <div class="mbr-buttons mbr-buttons--right">
                <a href="index.php?pg=exemplo-75&m=email-enviado&#email"><button type="button" class="btn btn-primary">Enviar E-mail</button></a>
                <!-- <a href="exemplo-72.2.php"><button type="button" class="btn btn-primary">Download Certificado</button></a>                           -->
              </div>
            </div>
          </div><!-- End: .row -->
        </form>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- END: Exemplos -->