<div class="page-header">
    <h1>Entre em contato</h1>
    <h3>Responderemos em breve</h3>
</div>
<div class="row featurette">
    <form name="contato" action="index.php" method="post">
        <div class="col-md-7 active">
            <p><input type="text" name="assunto" required="required" class="form-control" placeholder="Assunto..." /></p>
            <p><textarea class="form-control" name="mensagem" required="required" rows="5" placeholder="Seja breve..." ></textarea></p>
        </div>
        <div class="col-md-5">
            <p><input type="text" name="nome" required="required" class="form-control" placeholder="Nome..." /></p>
        </div>
        <div class="col-md-5">
            <p><input type="email" name="email" required="required" class="form-control" placeholder="Email..." /></p>
        </div>
        <div class="col-md-5">
            <p><input type="tel" name="tel" class="form-control" placeholder="Telefone... (opcional)" /></p>
            <input type="hidden" name="enviado" value="1" />
            <p><input type="submit" value="Enviar" class="btn btn-primary" /></p>
        </div>
    </form>
</div>