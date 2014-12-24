<?php
require_once('limpeza.php');
$necessario = array(nome,email,mensagem);
$extra = array(tel,assunto);
limpar($necessario,1);
if($_POST['i']=="1")
{
    require_once('vazios.php');
}
else
{
    limpar($extra,0);
    require('dados.php');
}
?>