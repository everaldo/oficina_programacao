<?php

/*
 * Retorne a String da Consulta
 *
 */



function inserir_usuario_query($email, $password_hash, $uf, $municipio){
   die('Escreva uma consulta que insira um usuario 
     com os valores passados como parâmetro.
    arquivo: consultas/jogo.php - inserir_usuario_query');
}


function usuario_por_email_query($email){
   die('Escreva uma consulta que retorna (seleciona)
     um usuario por $email.
     Colunas: id, email, senha
     Use Limit 1
    arquivo: consultas/jogo.php - usuario_por_email_query');
}

function usuario_por_id_query($id){
   die('Escreva uma consulta que retorna (seleciona)
     um usuario por $id.
     Colunas: id, email, senha
     Use Limit 1
    arquivo: consultas/jogo.php - usuario_por_id_query');
}



?>
