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
 * arquivo: index.php
 */
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Frutas Favoritas</title>
</head>
<body>
    <form name="frutas_form" action="frutas_favoritas.php"
       method="GET">
      <input type="checkbox" name="frutas[]" id="abacaxi"
        value="abacaxi">
      <label for="abacaxi">Abacaxi</label>
      <input type="checkbox" name="frutas[]" id="abacate"
        value="abacate">
      <label for="abacate">Abacate</label>
      <input type="checkbox" name="frutas[]" id="laranja"
        value="laranja">
      <label for="laranja">Laranja</label>
      <input type="checkbox" name="frutas[]" id="limao"
        value="limao">
      <label for="limao">Limão</label>
      <input type="checkbox" name="frutas[]" id="maca"
        value="maca">
      <label for="maca">Maçã</label>
      <input type="checkbox" name="frutas[]" id="melancia"
        value="melancia">
      <label for="melancia">Melancia</label>
      <input type="checkbox" name="frutas[]" id="morango"
        value="morango">
      <label for="morango">Morango</label>
      <input type="checkbox" name="frutas[]" id="uva"
        value="uva">
      <label for="uva">Uva</label>
      <input type="submit" name="enviar"
         value="Enviar">
    </form>
</body>
</html>
