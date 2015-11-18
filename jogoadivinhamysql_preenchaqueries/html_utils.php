<?php

function options_for_array($array, $selected_element, $val_key, $label_key){
  $options = "";
  foreach($array as $element){
    $option_selected = $element[$val_key] == $selected_element ? "selected" : "";
    $options .= <<<EOT
      <option value='{$element[$val_key]}' $option_selected>{$element[$label_key]}</option>
EOT;
  }
  return $options;
}



?>
