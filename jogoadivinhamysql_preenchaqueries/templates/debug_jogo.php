<?php
echo "<h1>Modo DEBUG Ativado. Para desativar, mude a constante DEBUG no arquivo config.php</h1>";
echo "<h1>Segredo:" . $jogo['segredo'] . "</h1>";
echo "<h2>Número de jogadas:" . count($jogadas) . "</h2>" ;
if (empty($jogadas)){
  return;
}
?>
<table>
  <theader>
    <td>Palpite</td>
    <td>Horário</td>
  </theader>
  <tbody>
    <?php foreach($jogadas as $jogada) { ?>
      <tr>
        <td><?php echo $jogada['palpite'] ?></td>
        <td><?php echo formata_data($jogada['hora']); ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
