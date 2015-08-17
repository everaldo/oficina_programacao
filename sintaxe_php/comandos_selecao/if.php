<?php
/*
 * Autor: Everaldo Gomes - everaldo.gomes@pucpr.br
 * Data: 17 de Agosto de 2015
 *
 * Comando if
 *
 * O comando de seleção if é essencial em qualquer linguagem
 * de programação.
 *
 * Ele avalia uma expressão lógica, e se o resultado for verdadeiro
 * executa o próximo comando ou bloco de comandos.
 *
 *
 */


function imprime_if(){

  $x = 0;
  echo "<h1>Valor de x antes do if: $x</h1>";
  if(true){
    echo "<h1>O comando if executa o próximo comando ou bloco de comandos ";
    echo "se a expressão lógica for verdadeira</h1>";
  ?>
    <h2>Se houver código HTML dentro de um comando IF, ele também
         é impresso</h2>
  <?php
    $x = 10;


  }
  echo "<h1>Valor de x depois do if: $x</h1>";


  if(1 == 1):
    echo "<h3>O comando if também possui essa sintaxe alternativa com ";
    echo "dois pontos após os parênteses e endif; ao final do bloco</h3>";

  endif;

  if(! ("" or [] or 0 or "0"))
    echo <<<EOT
      <h2>String vazia, array vazio, número zero e string zero avaliam
          como falso. O operador ! inverte o resultado de uma expressão
          lógica.</h2>
      <h3>Esse comando if não precisa de {} porque só tem um comando echo
         com uma longa string. Esse tipo de string multilinha é chamada
         de <a href="http://php.net/manual/pt_BR/language.types.string.php#language.types.string.syntax.heredoc">
      heredoc</a>: 
EOT;
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
  <?php imprime_if(); ?>
</body>
</html>

