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
 *
 * arquivo: index.php
 */
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Soma</title>
</head>
<body>
    <form name="soma_form" action="resultado.php"
       method="GET">
      <label for="num1">Número 1:</label>
      <input type="number" name="num1" id="num1"
        placeholder="Digite um número">
      <label for="num2">Número 2:</label>
      <input type="number" name="num2" id="num2"
        placeholder="Digite um número">
      <input type="submit" name="enviar"
         value="Somar">
    </form>
</body>
</html>
