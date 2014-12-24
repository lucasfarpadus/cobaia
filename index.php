<?php
if(isset($_POST['enviado']))
{
    $local = "static/enviado.php";
    $caminho  = "contato";
}
else
{
    if(isset($_GET['local'])) //interessante que nem o built-in server do php me mostrou esse descuido
    {
        $caminho = $_GET['local'];
    }
    else
    {
        $caminho = "home.php";
    }
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