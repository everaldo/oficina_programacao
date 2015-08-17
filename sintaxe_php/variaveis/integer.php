<?php
/*
 * Autor: Everaldo Gomes - everaldo.gomes@pucpr.br
 * Data: 16 de Agosto de 2015
 *
 * Variáveis inteiras
 *
 *
 */


function imprime_inteiros(){

  $nota = 9;
  $profundidade = -20000;

  echo "<h1>Uma variável inteira pode assumir um valor máximo ";
  echo "de acordo com a arquitetura do computador (32 ou 64 bits)</h1>";
  echo "<p>Nota: $nota</p>";
  echo "<h1>Uma variável inteira também pode ser negativa</h1>";
  echo "<p>Profundidade (em léguas submarinas): $profundidade</p>";


  echo "<h1>Conversão de valores para inteiro</h1>";
  echo "<h2>Veja o código fonte para saber os valores originais</h2>";
  valores_inteiros();

}


function valores_inteiros(){

  /* Baseado de: http://php.net/manual/pt_BR/function.intval.php */

  echo intval(42) . '<br>';                      // 42
  echo intval(4.2) . '<br>';                     // 4
  echo intval('42') . '<br>';                    // 42
  echo intval('+42') . '<br>';                   // 42
  echo intval('-42') . '<br>';                   // -42
  echo intval(042) . '<br>';                     // 34
  echo intval('042') . '<br>';                   // 42
  echo intval(1e10) . '<br>';                    // 1410065408
  echo intval('1e10') . '<br>';                  // 1
  echo intval(0x1A) . '<br>';                    // 26
  echo intval(42000000) . '<br>';                // 42000000
  echo intval(420000000000000000000) . '<br>';   // 0
  echo intval('420000000000000000000') . '<br>'; // 2147483647, se 32-bits
  echo intval(42, 8) . '<br>';                   // 42
  echo intval('42', 8) . '<br>';                 // 34
  echo intval(false) . '<br>';                 // 0
  echo intval("") . '<br>';                 // 0
  echo intval([]) . '<br>';                 // 0
  echo intval([5]) . '<br>';                 // 1




}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <title>Variáveis Inteiras</title>
</head>
<body>
  <h1>Variáveis Inteiras</h1>
  <?php imprime_inteiros(); ?>
</body>
</html>

