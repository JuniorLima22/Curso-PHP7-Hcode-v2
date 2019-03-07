<div class="page-header">
  <h1>Modelo de Controle de Versão para Software</h1>
</div>

<!-- BEGIN: Exemplos -->
<h4>Exemplos</h4>

<!-- BEGIN: .panel -->
<div class="panel panel-primary">
  <div class="panel-heading"><a href="" id="tiposBasicos"></a>Modelo de Controle de Versão para Software</div>
  <div class="panel-body">

    <h2>
      <small><code>Version</code>: Geralmente cada empresa define a sua metodologia de versionamento. Um padrão bastante comum utilizado no mercado é o seguinte: VERSÃO. RELEASE. REVISÃO <br>

      <code>VERSÃO</code>: Acrescenta-se um numero a VERSÃO se o projeto for uma evolução. <br>

      <code>RELEASE</code>: Acrescenta-se um numero a RELEASE se o projeto for uma melhoria (ex: exclusão ou inclusão de novas funcionalidades). <br>

      <code>REVISÃO</code>: Acrescenta-se um numero a REVISÃO se o projeto for uma correção de funcionalidades já existentes..<br>
      </small>
    </h2>

    <!-- Documentação -->
    <h4>Segue alguns links para consulta:<br></h4>
      <h4><small>Stack Overflow:<code> <a href="https://pt.stackoverflow.com/questions/101896/como-definir-a-vers%C3%A3o-de-um-software" target="_blank">https://pt.stackoverflow.com/questions/101896/como-definir-a-vers%C3%A3o-de-um-software</a></code></small></h4>
      
      <h4><small>Stack Overflow 2:<code> <a href="https://softwareengineering.stackexchange.com/questions/3199/what-version-naming-convention-do-you-use" target="_blank">https://softwareengineering.stackexchange.com/questions/3199/what-version-naming-convention-do-you-use</a></code></small></h4><br>

    <div class='well well-sm'>
      <strong>Condições: </strong> <br>
      Modelo 1 de Controle de Versão de Software.<br>

      <strong>Sintaxe da <code>v1.0.0</code> </strong><br><br>

      <pre>
        <code class="php">
      1.2.3 (11BCF) <- Número de compilação, deve corresponder a uma revisão no controle de origem
      ^ ^ ^
      | | |
      | | +--- REVISÃO: Acrescenta-se um numero a REVISÃO se o projeto for uma correção de funcionalidades já existentes.
      | +----- RELEASE: Acrescenta-se um numero a RELEASE se o projeto for uma melhoria (ex: exclusão ou inclusão de novas funcionalidades).
      +------- VERSÃO: Acrescenta-se um numero a VERSÃO se o projeto for uma evolução.
        </code>
      </pre>
    </div> <!-- End: .well well-sm -->

    <div class='well well-sm'>
      <strong>Condições: </strong> <br>
      Modelo 2 de Controle de Versão de Software.<br>

      <strong>Sintaxe da <code>v2.0.0</code> </strong><br><br>

      <pre>
        <code class="php">
          1.2.3 (11BCF) <- Número de compilação, deve corresponder a uma revisão no controle de origem
          ^ ^ ^
          | | |
          | | +--- Pequenos bugs, erros de ortografia, etc.
          | +----- Recursos menores, grandes correções de bugs, etc.
          +------- Versão principal, alterações de UX, alterações de formato de arquivo, etc.
        </code>
      </pre>
    </div> <!-- End: .well well-sm -->              

    <div class='well well-sm'>
      <strong>Condições: </strong> <br>
      Modelo 3 de Controle de Versão de Software.<br>

      <strong>Sintaxe da <code>v3.0.0</code> </strong><br><br>

      <pre>
        <code class="php">
                    1.0.0
                        |
                      1.0.1
                        |
        (público 1.0) 1.0.2 -----
                        | \
                      2.0.0 1.1.0
                        | |
                      2.0.1 1.1.1 (público 1.1)
                        |
        (público 2.0) 2.0.2 -----
                        | \
                      3.0.0 2.1.0
                                 |
                               2.1.1 (público 2.1)
                                 |
                               2.2.0
                                 |
                               2.2.1
        </code>
      </pre>
    </div> <!-- End: .well well-sm -->

  </div> <!-- End: .panel-body -->
</div> <!-- End: .panel panel-primary -->
<!-- END: .panel -->

<!-- END: Exemplos -->