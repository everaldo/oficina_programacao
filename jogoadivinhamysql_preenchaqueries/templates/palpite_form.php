<form name='form_segredo' action="<?php echo jogo_url($jogo['id']) ?>" method='POST'>
  <label for='palpite'>Adivinhe o segredo:</label>
  <input type="text" name='palpite'>
  <input type="hidden" name='id' value=<?php echo $jogo['id']; ?>>
  <input type='submit' value='Enviar'>
</form>


