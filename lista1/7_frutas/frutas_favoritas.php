<?php
/*
 * Everaldo Gomes - everaldo.gomes@pucpr.br
 * 24/08/2015
 *
 * 7.  Criar uma página index.php, com um formulário
 * com 8 campos do tipo
 * checkbox, que representam as seguintes frutas:
 * {abacaxi, abacate, laranja, limão, maçã, melancia,
 * morango, uva}. O alvo desse formulário deve ser a
 * página frutas_favoritas.php, utilizando o método
 * de submissão GET. A página frutas_favoritas.php
 * deve imprimir o nome das frutas favoritas, que foram
 * previamente selecionadas. Cada fruta deve ser impressa
 * com uma cor próxima à da fruta real. Exemplo:
 * limão, verde; uva, roxo.
 *
 * arquivo: frutas_favoritas.php
 */


define('COR_ABACAXI', '#f8d016');
define('COR_ABACATE', '#858842');
define('COR_LARANJA', '#f48806');
define('COR_LIMAO', '#4ba351');
define('COR_MACA', '#ed1b24');
define('COR_MELANCIA', '#346b0f');
define('COR_MORANGO', '#861514');
define('COR_UVA', '#662e91');

function frutas_favoritas(){
  $nomes_frutas = [ "abacaxi" => "Abacaxi",
    "abacate" => "Abacate", "laranja" => "Laranja",
    "limao" => "Limão", "maca" => "Maçã",
    "melancia" => "Melancia", "morango" => "Morango",
    "uva" => "Uva"];
  $frutas = $_GET["frutas"];
  foreach($frutas as $fruta){
    $nome_fruta = $nomes_frutas[$fruta];
    imprime_fruta($fruta, $nome_fruta);
  }

}

function imprime_fruta($fruta, $nome_fruta){
  $cor_fruta = constant("COR_" . strtoupper($fruta));
  echo <<<EOT
    <h1 style="color:$cor_fruta">
      $nome_fruta
    </h1>

EOT;
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Frutas Favoritas</title>
</head>
<body>
  <?php frutas_favoritas(); ?>
</body>
</html>
