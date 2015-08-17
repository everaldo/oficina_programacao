<?php
/*

Autor: Everaldo Gomes - everaldo.gomes@pucpr.br
Data: 16 Agosto de 2015

Programa: Gera um Índice com links para todos os arquivos do diretório


*/

$files = glob('./*.php');

function imprime_arquivo($file){
  $file_name = str_replace("./", "", $file);
  echo <<<EOT
    <tr>
      <td><a href="$file" target="_blank">$file_name</a></td>
    </tr>

EOT;

}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <title>Índice de Arquivos com Exemplos sobre o comando if</title>
</head>
<body>
  <h1>Índice de Arquivos</h1>
  <table>
    <thead>
      <tr>
        <td>Nome do Arquivo</td>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach($files as $file){
          imprime_arquivo($file);
        }
      ?>
    </tdoby>
  </table>
</body>
</html>

