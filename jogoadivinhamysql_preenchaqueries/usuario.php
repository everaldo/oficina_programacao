<?php

require_once 'op_bd.php';
require_once 'consultas.php';

function get_usuario_id(){
  return $_COOKIE['usuario_id'];
}

function esta_logado(){
  return ! empty($_COOKIE['usuario_id']);
}

function verifica_esta_logado(){
  if(! esta_logado()){
    redireciona_com_erro("Necessário fazer login");
  }
}
function logoff(){
  setcookie('usuario_id', '', time() - 1);
}

function login($email, $senha){
  $usuario = get_usuario_por_email($email);
  if(empty($usuario)){
    return false;
  }
  if(password_verify($senha, $usuario['senha'])){
    setcookie('usuario_id', $usuario['id'], time() + UM_ANO);
    return true;
  }
  return false;
}

function cadastrar_ou_logar(){
  require 'templates/cadastrar_ou_logar.php';
}

function redireciona_apos_login(){
  header('Location: ' . ROOT_URL);
  exit();
}

function redireciona_com_erro($mensagem, $url = ROOT_URL){
  header('Location: ' . $url . "?erro=$mensagem");
  exit();
}


function criar_usuario($email, $senha, $uf, $municipio){
  $password_hash = password_hash($senha, PASSWORD_DEFAULT);
  op_conecta_bd();
  return op_query(inserir_usuario_query($email, $password_hash, $uf, $municipio));
}
function get_usuario_por_email($email){
  op_conecta_bd();
  $resultado = op_select_query(usuario_por_email_query($email));
  return mysql_fetch_assoc($resultado);
}

function get_usuario_por_id($id){
  op_conecta_bd();
  $resultado = op_select_query(usuario_por_id_query($id));
  return mysql_fetch_assoc($resultado);
}

?>
