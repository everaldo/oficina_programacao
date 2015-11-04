<?php

require 'conexao.php';
require 'uf.php';

$conexao = new Conexao('localhost', 'root', 'puc@1234');
$uf = new Uf($conexao, 'municipios', 'ufs');

var_dump($uf->lista_ufs());








?>
