<?php
/*
 * Everaldo Gomes - everaldo.gomes@pucpr.br
 * 24/08/2015
 *
 * 6. Criar uma página index.php, com um formulário
 * com dois campos do tipo texto e 1 campo do tipo
 * select, com 4 opções, que representam as seguintes
 * operações: {soma, subtração, multiplicação e divisão}.
 * O alvo desse formulário deve ser a página resultado.php,
 * utilizando o método de submissão POST.
 * A página resultado.php deve imprimir o nome da
 * operação efetuada, os valores dos operandos e
 * o resultado da operação. Se não for possível
 * efetuar a operação, uma mensagem deve ser impressa.
 * Divisões por zero não podem ser efetuadas
 * e uma mensagem especial deve ser impressa.
 *
 * arquivo: resultado.php
 * Este arquivo é idêntico ao do exercício 5
 */


define(SOMA, 'soma');
define(SUBTRACAO, 'subtracao');
define(MULTIPLICACAO, 'multiplicacao');
define(DIVISAO, 'divisao');


function soma($num1, $num2){
  return $num1 + $num2;
}


function subtracao($num1, $num2){
  return $num1 - $num2;
}


function multiplicacao($num1, $num2){
  return $num1 * $num2;
}


function divisao($num1, $num2){
  if($num2 != 0){
    return $num1 / $num2;
  }
  else{
    die("ERRO: Impossível realizar divisão por zero");
  }
}

function valida_operandos($num1, $num2){
  return is_numeric($num1) &&
         is_numeric($num2);
}

function efetua_calculo($num1, $num2,
  $operacao){
  switch($operacao){
    case SOMA:
      $resultado = soma($num1, $num2);
      imprime_resultado($num1, $num2,
        $operacao, $resultado);
      break;
    case SUBTRACAO:
      $resultado = subtracao($num1, $num2);
      imprime_resultado($num1, $num2,
        $operacao, $resultado);
      break;
    case MULTIPLICACAO:
      $resultado = multiplicacao($num1, $num2);
      imprime_resultado($num1, $num2,
        $operacao, $resultado);
      break;
    case DIVISAO:
      $resultado = divisao($num1, $num2);
      imprime_resultado($num1, $num2,
        $operacao, $resultado);
      break;
    default:
      echo "Operação inválida: $operacao";
  }
}

function operador($operacao){
  $operadores = [ SOMA => '+',
    SUBTRACAO => '-', MULTIPLICACAO => '*',
    DIVISAO => '/'];
  return $operadores[$operacao];

}

function imprime_resultado($num1, $num2,
  $operacao, $resultado){
    $simbolo_operador = operador($operacao);
    echo "<h1>
      $num1 $simbolo_operador $num2 = $resultado
      </h1>";
}

function calculadora(){
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $operacao = $_POST["operacao"];
  if(valida_operandos($num1, $num2)){
    efetua_calculo($num1, $num2, $operacao);
  }
  else{
    echo "Não foi possível efetuar a operação $operacao";
  }

}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Calculadora Select Box</title>
</head>
<body>
  <?php calculadora(); ?>
</body>
</html>
