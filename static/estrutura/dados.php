<div class="page-header">
    <div class="alert alert-success" role="alert">
        <strong>Mensagem enviada!</strong> Agora basta aguardar nossa resposta.
      </div>
    <h3>Os dados enviados foram:</h3>
</div>
<div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Nome</h3>
            </div>
            <div class="panel-body">
              <?php echo $_POST['nome']; ?>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Email</h3>
            </div>
            <div class="panel-body">
              <?php echo $_POST['email']; ?>
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Telefone</h3>
            </div>
            <div class="panel-body">
              <?php $_POST['tel'] = str_replace(" ", "", $_POST['tel']); if($_POST['tel']==""){echo "vazio";}else{echo $_POST['tel'];} ?>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Assunto</h3>
            </div>
            <div class="panel-body">
              <?php echo $_POST['assunto']; ?>
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Mensagem</h3>
            </div>
            <div class="panel-body">
              <?php echo $_POST['mensagem']; ?>
            </div>
          </div>
          <p><a class="btn btn-default" href="contato" role="button">Escrever outra »</a></p>
        </div><!-- /.col-sm-4 -->
      </div>