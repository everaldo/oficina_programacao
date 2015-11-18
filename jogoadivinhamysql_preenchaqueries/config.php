<?php

require_once 'formata_datas.php';

define('DEBUG', true);

define('TEMPLATES_DIR', './templates');
define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT'] . PATH_SEPARATOR . 'jogoadivinha');
define('ROOT_URL', 'http://php/jogoadivinha/index.php');
define('SITE_ROOT', 'http://php/jogoadivinha/');
define('NEW_USER_PAGE', 'cadastrar.php');


define('DB_HOST', 'localhost');
define('DB_USUARIO', 'jogoadivinha');
define('DB_SENHA', 'puc@1234');
define('DB_BANCO_DADOS', 'jogoadivinha');


define('UM_ANO', 60 * 60 * 24 * 365);


define('MAX_SEGREDO', 100);
define('MAX_JOGADAS', 5);
define('STATUS_ATIVO', 'ativo');
define('STATUS_VITORIA', 'vitoria');
define('STATUS_DERROTA', 'derrota');

function eh_get(){
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}

function eh_post(){
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}


?>
