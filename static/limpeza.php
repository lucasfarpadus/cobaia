<?php
function limpar($vars, $c)
{
  switch ($c)
  {
    case '0': // só limpa as variáveis
      $_POST["i"] = "0";
      foreach($vars as $campo)
      {
        $_POST[$campo] = filter_var($_POST[$campo], FILTER_SANITIZE_STRING);
      }
    break;

    case '1': // limpa e avisa estejam vazias
      $_POST["i"] = "0";
      foreach($vars as $campo)
      {
        $_POST[$campo] = filter_var($_POST[$campo], FILTER_SANITIZE_STRING);
        $str = str_replace(" ", "", $_POST[$campo]);
        if ($str==="" || $str=="0")
        {
          $_POST["i"] = "1";
          break;
        }
      }
    break;

    default:
      $_POST["i"] = "1";
    break;
  }
}
?>