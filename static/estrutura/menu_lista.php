<?php
$menu = [
'/home' => '<a href="home">Home</a></li>',
'/produtos' => '<a href="produtos">Produtos</a></li>',
'/servicos' => '<a href="servicos">Serviços</a></li>',
'/empresa' => '<a href="empresa">Empresa</a></li>',
'/contato' => '<a href="contato">Contato</a></li>',
];
foreach ($menu as $item => $link) {
  if($_SERVER['REQUEST_URI'] == $item)
  {
	  echo '<li class="active">' . $link;
  }
  else
  {
  echo '<li>' . $link;
  }
}
?>