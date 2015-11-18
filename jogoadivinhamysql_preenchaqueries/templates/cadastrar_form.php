<?php 

require_once "select_uf.php";
require_once "exibe_erros.php";

exibe_erros();

?>

<form name="cadastrar_form" method="POST" action="criar_usuario.php">
  <p>
    <label for="email">E-mail:</label>
    <input type="text" name="email" id="email">
  </p>
  <p>
    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha">
  </p>
  <p>
    <label for="confirmacao_senha">Confirme a Senha:</label>
    <input type="password" name="confirmacao_senha" id="confirmacao_senha">
  </p>
  <p>
    <label for="uf">UF:</label>
    <?php echo select_uf("uf", $_GET['uf']); ?>
  </p>
  <p>
    <label for="municipio">Municipio:</label>
    <select id="municipio" name='municipio' disabled>
      <option>Selecione o Município</option>
    </select>
  </p>

   <input type="submit" value="Entrar">
</form>
<script src="jquery.js"></script>
<script>
  jQuery(function($){
    $('#uf').change(function(){
      $.ajax({
        url: 'select_municipios.php?uf=' + $(this).val(),
        statusCode: {
          404: function() {
            alert( "Implemente a Página municipios.php" );
          }
        }
      }).fail(function(data){
        alert('Ocorreu um erro na requisição Ajax');
      }).done(function(data){
        $('#municipio').html(data);
        $('#municipio').attr('disabled', false);
      });
    });
  });
</script>





