<?php
/* Everaldo Gomes - everaldo.gomes@pucpr.br
 * 23/08/2015
 *
 * 4. Criar uma página index.php, com um formulário
 * com dois campos do tipo texto, com alvo para a
 * página resultado.php, utilizando o método de
 * submissão GET. A página resultado.php deve
 * imprimir os dois valores recebidos via
 * formulário e sua soma. Se não for possível
 * efetuar a soma, uma mensagem deve ser impressa.
 
 * arquivo: resultado.php
 *
 * is_numeric:
 * http://php.net/manual/en/function.is-numeric.php
 */

function soma(){
  $num1 = $_GET["num1"];
  $num2 = $_GET["num2"];
  if(is_numeric($num1) && is_numeric($num2)){
    $soma = $num1 + $num2;
    echo "O resultado da soma é $soma";
  }
  else{
    echo "Não foi possível realizar a soma";
  }
}


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Soma</title>
</head>
<body>
  <?php soma(); ?>
</body>
</html>
