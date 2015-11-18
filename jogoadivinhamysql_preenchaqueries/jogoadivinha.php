<?php

require_once 'op_bd.php';
require_once 'consultas.php';

function redireciona_jogo_url($id, $mensagem = ''){
  if(! empty($mensagem)){
    header("Location: " . jogo_url($id) . "&mensagem=$mensagem");
  }
  else{
    header("Location: " . jogo_url($id));
  }
  exit();
}

function jogo_url($id){
  return SITE_ROOT . "jogo.php?id=$id" ;
}


function jogo_nao_pertence_ao_usuario($id, $usuario_id){
  return $id != $usuario_id;
}

function novo_jogo($usuario_id){
  $segredo = rand(1, MAX_SEGREDO);
  $status  = STATUS_ATIVO ;
  op_conecta_bd();
  op_query(get_query_novo_jogo($usuario_id, $segredo, $status));
  $resultado = op_query(get_query_ultimo_jogo_ativo($usuario_id));
  return mysql_fetch_assoc($resultado);
}

function verifica_palpite($jogo){
  $palpite = $_REQUEST['palpite'];
  if(! is_numeric($palpite)){
    redireciona_jogo_url($jogo['id'], 'O palpite deve ser um número inteiro');
  }
  salva_jogada($jogo['id'], $palpite);
  if($palpite == $jogo['segredo']){
    venceu_jogo($jogo['id']);
    $mensagem = "Você venceu! O segredo era $palpite";
  }
  else if($palpite < $jogo['segredo']){
    $mensagem = 'O segredo é maior';
  }
  else{
    $mensagem = 'O segredo é menor';
  }
  redireciona_jogo_url($jogo['id'], $mensagem); //recarrega a página
}

function verifica_fim_jogo($jogo, $jogadas){
  if($jogo['status'] != STATUS_ATIVO){
    return true;
  }
  if(count($jogadas) == MAX_JOGADAS){
    perdeu_jogo($jogo['id']);
    $mensagem = "Você perdeu o jogo. Limite máximo de jogadas";
    redireciona_jogo_url($jogo['id'], $mensagem); //recarrega a página
  }
}


function lista_jogos_usuario($usuario_id){
  op_conecta_bd();
  $resultado = op_query(get_query_jogos_usuario($usuario_id));
  return op_query_result_to_array($resultado);
}

function get_jogo_por_id($id){
  op_conecta_bd();
  $resultado = op_select_query(jogo_por_id_query($id));
  return mysql_fetch_assoc($resultado);
}


function get_jogadas_por_jogo_id($jogo_id){
  op_conecta_bd();
  $resultado = op_query(get_query_jogadas_por_jogo_id($jogo_id));
  return op_query_result_to_array($resultado);
}

function salva_jogada($jogo_id, $palpite){
  op_query(get_query_insere_jogada($jogo_id, $palpite));

}

function venceu_jogo($jogo_id){
  op_query(get_query_venceu_jogo($jogo_id));
}

function perdeu_jogo($jogo_id){
  op_query(get_query_perdeu_jogo($jogo_id));
}


function verifica_jogo($usuario, $jogo){
  if(empty($jogo)){
    redireciona_com_erro("Jogo não encontrado");
  }
  if(jogo_nao_pertence_ao_usuario($jogo['usuario_id'], $usuario['id'])){
    redireciona_com_erro("Este jogo não pertence a este usuário");
  }
  return true;
}

function render_jogo($jogo, $jogadas){
  $status = $jogo['status'];
  if($status == STATUS_ATIVO){
    require 'templates/palpite_form.php' ;
  }
  else if($status == STATUS_DERROTA){
    echo 'Você perdeu este jogo';
  }
  else if($status == STATUS_VITORIA){
    echo 'Você venceu este jogo';
  }
  else{
    redireciona_com_erro('O jogo Possui um Status inválido');
  }
  debug_jogo($jogo, $jogadas);
}

function imprime_mensagem_jogo(){
  $mensagem = $_REQUEST['mensagem'];
  if(! empty($mensagem)){
    require 'templates/mensagem_jogo.php';
  }
}


function ranking_jogos(){
  op_conecta_bd();
  $resultado = op_query(get_query_ranking());
  return op_query_result_to_array($resultado);

}
function render_ranking($top){
  $ranking = $top;
  require 'templates/ranking.php' ;
}

function debug_jogo($jogo, $jogadas){
  if(DEBUG){
    require 'templates/debug_jogo.php';
  }
}

function render_meus_jogos($jogos){
  require 'templates/meus_jogos.php';
}

?>
