<?php

require_once 'usuario.php';
require_once 'jogoadivinha.php'; 
require_once 'menu_usuario.php';


verifica_esta_logado();

$usuario = get_usuario_por_id(get_usuario_id());
$jogo = get_jogo_por_id($_REQUEST['id']);

verifica_jogo($usuario, $jogo);
  

if(eh_post()){
  verifica_palpite($jogo);
}

$jogadas = get_jogadas_por_jogo_id($jogo['id']);

verifica_fim_jogo($jogo, $jogadas);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jogo - <?php echo $usuario['email'] ?></title>
  </head>
<body>
<?php 
  menu_usuario();
  imprime_mensagem_jogo();
  render_jogo($jogo, $jogadas);
?>
  
</body>
</html>
