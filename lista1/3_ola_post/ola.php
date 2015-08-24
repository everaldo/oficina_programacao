<?php
/* Everaldo Gomes - everaldo.gomes@pucpr.br
 * 23/08/2015
 *
 * * 3. Criar uma página index.php, com um formulário
 *  com um único campo do tipo texto, com alvo para
 *  a página ola.php, utilizando o método de submissão
 * POST. A página ola.php deve imprimir uma mensagem
 * “Olá, $nome”, onde
 * $nome é o valor submetido no formulário.
 *
 * arquivo: ola.php
 *
 */

function cumprimenta(){
  $nome = $_POST["nome"];
  if(! empty($nome)){
    echo "Olá, $nome";
  }
}


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Olá</title>
</head>
<body>
  <?php cumprimenta(); ?>
</body>
</html>
