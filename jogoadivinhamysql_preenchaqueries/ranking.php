<?php

require_once 'jogoadivinha.php';
require_once 'usuario.php';
require_once 'exibe_erros.php';
require_once 'menu_usuario.php';

verifica_esta_logado();

$top = ranking_jogos();


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ranking - Jogo Adivinha</title>
  </head>
<body>
<?php
  menu_usuario();
  render_ranking($top);

?>
</body>
</html>
