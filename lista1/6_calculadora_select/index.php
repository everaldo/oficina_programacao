<?php
/*
 * Everaldo Gomes - everaldo.gomes@pucpr.br
 * 24/08/2015
 *
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
 * arquivo: index.php
 */
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Calculadora Select Box</title>
</head>
<body>
    <form name="calculadora_form" action="resultado.php"
       method="POST">
      <label for="num1">Número 1:</label>
      <input type="text" name="num1" id="num1"
        placeholder="Digite um número">
      <label for="num2">Número 2:</label>
      <input type="text" name="num2" id="num2"
        placeholder="Digite um número">
      <select name="operacao">
        <option value="">Selecione uma Operação</option>
        <option value="soma">Soma</option>
        <option value="subtracao">Subtração</option>
        <option value="multiplicacao">Multiplicação</option>
        <option value="divisao">Divisão</option>
      </select>
      <input type="submit" name="enviar"
         value="Calcular">
    </form>
</body>
</html>
