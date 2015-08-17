<?php
/*
 * Autor: Everaldo Gomes - everaldo.gomes@pucpr.br
 * Data: 16 de Agosto de 2015
 *
 * Variáveis booleanas
 *
 * O tipo booleano aceita dois valores: verdadeiro ou falso.
 *
 * Uma expressão lógica, que utiliza os operadores lógicos,
 * sempre retorna verdadeiro ou falso.
 *
 * Os comandos de seleção if/else, switch/case e os comandos
 * de repetição while, for e do/while fazem uso de variáveis
 * booleanas para decidirem quais as próximas instruções
 * serão executadas.
 *
 *
 */


function imprime_booleanos(){

  //true e false são os únicos valores possíveis para uma variável
  //booleana
  $falsiane = false;
  $batman = true;

  echo "<h1>Uma variável booleana com valor false, quando impressa ";
  echo "não retorna nada</h1>";
  echo "<p>Falsiane: $falsiane</p>";
  echo "<h1>Uma variável booleana com valor true, quando impressa ";
  echo "retorna 1</h1>";
  echo "<p>Batman: $batman</p>";


  echo "<h1>Conversão de valores para booleano</h1>";
  echo "<h2>Observe que null, string vazia, array vazio, 0 e 0.0 ";
  echo "retornam false</h2>";
  valores_booleanos();

}


function valores_booleanos(){

  /* Baseado de: http://php.net/manual/pt_BR/function.boolval.php */

  echo 'null:     '.(boolval(null) ? 'true': 'false')."<br>";
  echo '0:        '.(boolval(0) ? 'true' : 'false')."<br>";
  echo '42:       '.(boolval(42) ? 'true' : 'false')."<br>";
  echo '0.0:      '.(boolval(0.0) ? 'true' : 'false')."<br>";
  echo '4.2:      '.(boolval(4.2) ? 'true' : 'false')."<br>";
  echo '"":       '.(boolval("") ? 'true' : 'false')."<br>";
  echo '"string": '.(boolval("string") ? 'true' : 'false')."<br>";
  echo '"0":      '.(boolval("0") ? 'true' : 'false')."<br>";
  echo '"1":      '.(boolval("1") ? 'true' : 'false')."<br>";
  echo '[1, 2]:   '.(boolval([1, 2]) ? 'true' : 'false')."<br>";
  echo '[]:       '.(boolval([]) ? 'true' : 'false')."<br>";
  echo 'stdClass: '.(boolval(new stdClass) ? 'true' : 'false')."<br>";






}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <title>Variáveis Booleanas</title>
</head>
<body>
  <h1>Variáveis Booleanas</h1>
  <?php imprime_booleanos(); ?>
</body>
</html>

