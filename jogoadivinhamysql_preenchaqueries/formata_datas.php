<?php

date_default_timezone_set('America/Sao Paulo');


function formata_data($datetime){
  return date('d/m/Y H:i:s', strtotime($datetime)) ;
}


?>
