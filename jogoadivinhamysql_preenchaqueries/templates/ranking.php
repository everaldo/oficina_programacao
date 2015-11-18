<?php

if(empty($ranking)){
  echo "<h1>Ranking vazio. Ninguém venceu ainda</h1>";
  return;
}
?>

<table>
  <theader>
    <td>E-mail</td>
    <td>Cidade/UF</td>
    <td>Número de Jogadas</td>
    <td>Horário</td>
  </theader>
  <tbody>
    <?php foreach($ranking as $jogo) { ?>
      <tr>
        <td><?php echo $jogo['email'] ?></td>
        <td><?php echo "{$jogo['municipio']}/{$jogo['sigla']}" ?></td>
        <td><?php echo $jogo['num_jogadas'] ?></td>
        <td><?php echo $jogo['hora'] ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
