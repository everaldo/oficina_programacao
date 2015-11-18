<?php

require_once "config.php";


function op_conecta_bd(){
  $link = mysql_connect(DB_HOST, DB_USUARIO, DB_SENHA);
  if(!$link){
    die('Não foi possível conectar ao banco' . mysql_error());
  }
  mysql_select_db(DB_BANCO_DADOS);
  mysql_query("SET NAMES 'utf8'");
  return $link;
}

function op_select_query($query){
  $result = mysql_query($query);
  return $result;
}

function op_erro_query($query){
    $mensagem = 'A consulta não foi executada com sucesso: ';
    $mensagem .= mysql_error();
    $mensagem .= "Query: $query" ;
    die($mensagem);

}


function op_verifica_select_query($result, $query){
  if( mysql_num_rows($result) == 0){
    op_erro_query($query);
    return false;
  }
}



function op_query($query){
  $result = mysql_query($query);
  if(! $result){
    op_erro_query($query);
  }
  return $result;
}


function op_query_result_to_array($resultado){
  $array = [];
  while($row = mysql_fetch_assoc($resultado)){
    $array[] = $row;
  }
  return $array;
}



?>
