<?php
if($_SERVER['REQUEST_URI'] == "" || $_SERVER['REQUEST_URI'] == "/")
{
	$pedido = "static/home.php";
}
else
{
	$pedido = "static/" . $_SERVER['REQUEST_URI'] . ".php";
}
if(stream_resolve_include_path($pedido) == TRUE)
{
    $local = $pedido;
}
else
{
	header("HTTP/1.0 404 Not Found");
	require_once('static/estrutura/erro.php');
	require_once('static/estrutura/menu.php');
	require_once('static/estrutura/footer.php');
	require_once('static/estrutura/end.php');
	exit();
}
?>