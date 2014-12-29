  <?php
  $menu = array(
  'home' => '<a href="index.php?local=home">Home</a></li>',
  'produtos' => '<a href="index.php?local=produtos">Produtos</a></li>',
  'servicos' => '<a href="index.php?local=servicos">Serviços</a></li>',
  'empresa' => '<a href="index.php?local=empresa">Empresa</a></li>',
  'contato' => '<a href="index.php?local=contato">Contato</a></li>',
  );
  foreach ($menu as $item => $link) {
      if($caminho == $item)
      {
          echo '<li class="active">' . $link;
      }
      else
      {
      echo '<li>' . $link;
      }
  }
  ?>