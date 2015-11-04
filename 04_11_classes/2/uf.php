<?php
/* Everaldo Gomes - 04/11/2015 - everaldo.gomes@pucpr.br
 *
 * Classe: Uf
 * Representa o acesso a um banco de dados de Uf
 *
 *
 *
 */

require_once 'query_to_array.php';

class Uf{

  private $conexao;
  public $db;
  public $tabela;

  public function __construct($conexao, $db, $tabela){
    $this->conexao = $conexao;
    $this->db = $db;
    $this->tabela = $tabela;
  }

  public function lista_ufs(){
    $qa = new QueryToArray($this->query_ufs(), $this);
    return $qa->execute();
  }

  private function query_ufs(){
    return "SELECT codigo, nome, sigla
      FROM `$this->tabela` ORDER BY nome ASC";
  }

  public function conecta(){
    $this->conexao->conecta();
  }

}

?>
