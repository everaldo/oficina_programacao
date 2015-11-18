<?php

require_once 'jogoadivinha.php';
require_once 'usuario.php';
require_once 'exibe_erros.php';
require_once 'menu_usuario.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jogo Adivinha</title>
  </head>
<body>
<?php
exibe_erros();
if( esta_logado()) { 
  menu_usuario();
}else { 
  cadastrar_ou_logar();
}

?>
</body>
</html>
