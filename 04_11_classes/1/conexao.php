<?php
/* Everaldo Gomes - 04/11/2015 - everaldo.gomes@pucpr.br
 *
 * Classe: Conexao
 * Representa uma conexão com o banco de dados
 *
 *
 *
 */


class Conexao{

  private $host;
  private $usuario;
  private $senha;
  private $link;

  public function __construct($host, $usuario, $senha){
    $this->host = $host;
    $this->usuario = $usuario;
    $this->senha = $senha;
  }

  public function conecta(){
    $this->link = mysql_connect($this->host, $this->usuario,
                  $this->senha);
    if(! $this->link){
      die('Erro na conexão');
    }
  }

  public function desconecta(){
    mysql_close($this->link);
  }

  public function get_link(){
    return $this->link;
  }

};


?>
