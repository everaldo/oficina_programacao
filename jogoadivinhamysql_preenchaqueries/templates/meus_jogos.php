<?php 

if(empty($jogos)){
  return;
}
?>
<table>
  <theader>
    <th>Horário</th>
    <th>Status</th>
  </theader>
  <tbody>
    <?php foreach($jogos as $jogo) {  ?>
      <tr>
      <td><a href="<?php echo jogo_url($jogo['id']); ?>">
          <?php echo formata_data($jogo['hora']);  ?>
          </a></td>
      <td><?php echo $jogo['status'];  ?></td>
      </tr>
    <?php } ?> 
  </tbody>
</table>

