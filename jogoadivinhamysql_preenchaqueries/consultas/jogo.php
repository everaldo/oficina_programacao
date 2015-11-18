<?php


/*
 * Retorne a String da Consulta
 *
 */


function get_query_novo_jogo($usuario_id, $segredo, $status){
  $hora = date('Y-m-d H:i:s');
  die('Escreva uma consulta que crie um novo jogo
    com a hora atual e os parâmetros passados pela função
    arquivo: consultas/jogo.php - get_query_novo_jogo');
}

/*
 * Acredito que esta query não esteja sendo utilizada.
 * Inicialmente, pensei em fazer com que o Jogo carregasse
 * o último jogo ativo para deixar jogar automaticamente
 * após o login. Depois, desisti dessa ideia.
 *
 * Para jogar, é necessário ir à página "Meus Jogos",
 * que não estava nos planos iniciais
 *
 *
 */
function get_query_ultimo_jogo_ativo($usuario_id){
  $ativo = STATUS_ATIVO;
  return <<<EOT
    SELECT MAX(id) as novo_id, usuario_id, segredo, status
    FROM jogo
    WHERE usuario_id = $usuario_id and status = '$ativo'
    LIMIT 1
EOT;
}

function get_query_jogos_usuario($usuario_id){
   die('Escreva uma consulta que retorne todos os jogos 
     pertencentes a um usuário.
     colunas: id, usuario_id, segredo, status, hora
    arquivo: consultas/jogo.php - get_query_jogos_usuario');
}


function jogo_por_id_query($id){
   die('Escreva uma consulta que retorne um jogo 
     que tenha o mesmo id que foi passado como parâmetro
     colunas: id, usuario_id, segredo, status, hora
     Use LIMIT 1
    arquivo: consultas/jogo.php - jogo_por_id_query');
}

function get_query_atualiza_jogo($jogo_id, $status){
  $hora = date('Y-m-d H:i:s');
   die('Escreva uma consulta que atualize um jogo 
     que tenha o mesmo id que foi passado como parâmetro,
     com o novo status e hora
    arquivo: consultas/jogo.php - get_query_atualiza_jogo');
}

function get_query_venceu_jogo($jogo_id){
  $status_vitoria = STATUS_VITORIA;
  return get_query_atualiza_jogo($jogo_id, $status_vitoria);
}

function get_query_perdeu_jogo($jogo_id){
  $status_derrota = STATUS_DERROTA;
  return get_query_atualiza_jogo($jogo_id, $status_derrota);
}


?>
