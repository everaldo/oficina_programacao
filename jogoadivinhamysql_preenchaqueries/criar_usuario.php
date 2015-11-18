<?php

require_once 'usuario.php';


$email = $_REQUEST['email'];
$senha = $_REQUEST['senha'];
$confirmacao_senha = $_REQUEST['confirmacao_senha'];
$uf = $_REQUEST['uf'];
$municipio = $_REQUEST['municipio'];


if(empty($email) || empty($senha)){
  header('Location:' . SITE_ROOT . NEW_USER_PAGE . '?erro=Erro no e-mail ou senha');
  exit();
}

if(! valida_senha($senha, $confirmacao_senha)){
  header('Location:' . SITE_ROOT . NEW_USER_PAGE . '?erro=Erro na confirmação da senha');
  exit();
}

if(empty($uf) || empty($municipio)){
  header('Location:' . SITE_ROOT . NEW_USER_PAGE . '?erro=Erro na UF ou Município');
  exit();
}


if(criar_usuario($email, $senha, $uf, $municipio)){
  login($email, $senha);
  header('Location:' . ROOT_URL . '?mensagem=Usuário criado com sucesso');
  exit();
}
else{

}

function valida_senha($senha, $confirmacao_senha){
  return $senha == $confirmacao_senha;
}

?>
