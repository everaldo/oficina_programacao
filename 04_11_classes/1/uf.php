<?php
/* Everaldo Gomes - 04/11/2015 - everaldo.gomes@pucpr.br
 *
 * Classe: Uf
 * Representa o acesso a um banco de dados de Uf
 *
 *
 *
 */


class Uf{

  private $conexao;
  private $db;
  private $tabela;

  public function __construct($conexao, $db, $tabela){
    $this->conexao = $conexao;
    $this->db = $db;
    $this->tabela = $tabela;
  }

  public function lista_ufs(){
    $this->conexao->conecta();
    mysql_select_db($this->db);
    return $this->processa_lista_ufs($this->query_ufs());
  }

  private function query_ufs(){
    $query = "SELECT codigo, nome, sigla
      FROM `$this->tabela` ORDER BY nome ASC";
    $result = mysql_query($query);
    if(mysql_num_rows($result) == 0){
      $mensagem = "Erro na Consulta: " .
        mysql_error();
      $mensagem .= "CONSULTA: $query";
      die($mensagem);
    }
    return $result;
  }

  private function processa_lista_ufs($lista_ufs){
    $ufs = [];
    while($row = mysql_fetch_assoc($lista_ufs)){
      $ufs[] =$row;
    }
    return $ufs;
  }

}

?>
