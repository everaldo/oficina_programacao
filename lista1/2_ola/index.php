<?php
/* Everaldo Gomes - everaldo.gomes@pucpr.br
 * 23/08/2015
 *
 * 2. Criar uma página index.php, com um formulário com
 *  um único campo do  * tipo texto, com alvo para a
 *   página ola.php, utilizando o método de submissão
 * GET. A página ola.php deve imprimir uma mensagem
 * “Olá, $nome”, onde
 * $nome é o valor submetido no formulário.
 *
 * arquivo: index.php
 */
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Olá</title>
</head>
<body>
    <form name="ola_form" action="ola.php"
       method="GET">
      <input type="text" name="nome"
        placeholder="Digite seu nome">
      <input type="submit" name="enviar"
         value="Enviar">
    </form>
</body>
</html>
