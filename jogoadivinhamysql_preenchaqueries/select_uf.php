<?php

require_once "uf.php";
require_once "html_utils.php";

function select_uf($select_name, $selected_uf){
  $ufs = lista_ufs();
  $options = options_for_array($ufs, $selected_uf, "codigo", "nome" );
  return <<<EOT
    <select id='$select_name' name='$select_name'>
      <option value=''>Selecione a UF</option>
      $options
    </select>
EOT;
}


?>
