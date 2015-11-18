<?php

require_once "op_bd.php" ;
require_once 'consultas.php';

function lista_ufs(){
  op_conecta_bd();
  $resultado = op_select_query(query_ufs());
  return op_query_result_to_array($resultado); 
}

?>
