<?php
/* Everaldo Gomes - 04/11/2015 - everaldo.gomes@pucpr.br
 *
 * Classe: QueryToArray
 * Recebe uma Query Select -> Retorna um Array
 * Também recebe uma entidade que possui propriedades
 * $conexao, $db e $tabela
 * 
 *
 */


class QueryToArray{

  private $query;
  private $entity;

  public function __construct($query, $entity){
    $this->query = $query;
    $this->entity = $entity;
  }

  public function execute(){
    $this->entity->conecta();
    mysql_select_db($this->entity->db);
    return $this->processa_array($this->do_query());
  }

  private function do_query(){
    $result = mysql_query($this->query);
    if(mysql_num_rows($result) == 0){
      $mensagem = "Erro na Consulta: " .
        mysql_error();
      $mensagem .= "CONSULTA: $query";
      die($mensagem);
    }
    return $result;
  }

  private function processa_array($result){
    $a = [];
    while($row = mysql_fetch_assoc($result)){
      $a[] =$row;
    }
    return $a;
  }
}

?>
