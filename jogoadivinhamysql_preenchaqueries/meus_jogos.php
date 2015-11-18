<?php

require_once 'usuario.php';
require_once 'jogoadivinha.php'; 
require_once 'menu_usuario.php';

verifica_esta_logado();


$jogos = lista_jogos_usuario(get_usuario_id());
$usuario = get_usuario_por_id(get_usuario_id());

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Meus Jogos - <?php echo $usuario['email'] ?></title>
  </head>
<body>
<?php 

menu_usuario();
render_meus_jogos($jogos);

?>
</body>
</html>
