<?php

/*
 * Retorne a String da Consulta
 *
 */


function get_query_jogadas_por_jogo_id($jogo_id){
  $max_jogadas = MAX_JOGADAS;
  //colunas id, jogo_id, palpite, hora
  die('Escreva uma consulta que retorne o id, jogo_id
    palpite e hora de todas as jogadas pertencentes ao jogo_id
    Limite (no máximo) = $max_jogadas
    arquivo: consultas/jogadas.php - get_query_jogadas_por_jogo_id');
}

function get_query_insere_jogada($jogo_id, $palpite){
  $hora = date('Y-m-d H:i:s');
  die('Escreva uma consulta que insere uma jogada
    na tabela jogadas. A hora da jogada deve ser $hora
    arquivo: consultas/jogadas.php - get_query_insere_jogada');
}


?>
