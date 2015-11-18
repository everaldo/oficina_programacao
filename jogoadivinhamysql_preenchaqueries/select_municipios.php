<?php

require_once "municipios.php";
require_once "html_utils.php";

function select_municipios($select_name, $uf, $selected_municipio){
  $municipios = lista_municipios($uf);
  $options = options_for_array($municipios, $selected_municipio, "id", "nome");
  return <<<EOT
    <select id='$select_name' name='$select_name'>
      <option value=''>Selecione o Município</option>
      $options
    </select>
EOT;
}

echo select_municipios("municipios", $_GET['uf'], $_GET['municipio']);

?>
