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
 
 * arquivo: resultado_alternativo.php
 *
 * Essa versão não utiliza is_numeric()
 * e utiliza uma função eh_valido($n1, $n2)
 * para isolar o código de validação do código
 * da soma: separação de algoritmos e
 * responsabilidades
 *
 */

/*
 * Essa função converte entradas como 1a para 1.
 */
function eh_valido($num1, $num2){
  settype($num1, 'int');
  settype($num2, 'int');
  return (! empty($num1)) &&
         (! empty($num2)) &&
         is_int($num1) &&
         is_int($num2);

}


function soma(){
  $num1 = $_GET["num1"];
  $num2 = $_GET["num2"];
  if(eh_valido($num1, $num2)){
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
