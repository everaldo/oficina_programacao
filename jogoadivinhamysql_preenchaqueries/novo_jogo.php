<?php

require_once 'usuario.php';
require_once 'jogoadivinha.php';

verifica_esta_logado();

$jogo = novo_jogo(get_usuario_id());


header('Location: ' . jogo_url($jogo['novo_id']));


?>
