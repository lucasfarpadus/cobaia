<?php
if(isset($_POST['enviado']))
{
    $local = "static/estrutura/enviado.php";
}
else
{
	require_once("static/estrutura/trilha.php");
}
require_once('static/estrutura/head.php');
require_once('static/estrutura/menu.php');
require_once($local);
require_once('static/estrutura/footer.php');
require_once('static/estrutura/end.php');
?>