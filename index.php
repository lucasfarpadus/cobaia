<?php
if(isset($_POST['enviado']))
{
    $local = "static/enviado.php";
    $caminho  = "contato";
}
else
{
    $caminho = $_GET['local'];
    switch ($caminho) {
        case 'produtos':
            $local = "static/" . $_GET['local'] . ".php";
            break;
        case 'servicos':
            $local = "static/" . $_GET['local'] . ".php";
            break;
        case 'empresa':
            $local = "static/" . $_GET['local'] . ".php";
            break;
        case 'contato':
            $local = "static/" . $_GET['local'] . ".php";
            break;
        case 'home':
            $local = "static/" . $_GET['local'] . ".php";
            break;
        case 'enviado':
            $local = "static/" . $_GET['local'] . ".php";
    
        default:
            $caminho = "home";
            $local = "static/home.php";
            break;
    }
}
require_once('static/head.php');
require_once('static/menu.php');
require_once($local);
require_once('static/footer.php');
require_once('static/end.php');
?>