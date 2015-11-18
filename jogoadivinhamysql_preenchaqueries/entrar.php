<?php

require_once 'usuario.php';


if(login($_POST['email'], $_POST['senha'])){
  redireciona_apos_login();
}
else{
  redireciona_com_erro("Erro login: Usuário ou senha inválidos");
}


?>
