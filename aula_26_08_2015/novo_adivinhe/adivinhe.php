<?php
/*

  Nome: Adivinhe um Número
  Autor: Turma P2-1
  Data: 19/08/2015

 */


session_start();

function imprime_vitoria(){
  $class_vitoria = "warning";
  echo <<<EOT
    <div class="alert alert-$class_vitoria" role="alert">
      Ah Muleque!
    </div>
EOT;
}

function imprime_maior(){
  $class_maior = "info";
  echo <<<EOT
    <div class="alert alert-$class_maior" role="alert">
      Digite um número maior
    </div>
EOT;
}

function imprime_menor(){
  $class_menor = "danger";
  echo <<<EOT
    <div class="alert alert-$class_menor" role="alert">
    Digite um número menor
    </div>
EOT;
}

function verifica_jogo($secret, $valor){
  //POG: Retorne quando GET
  if($valor == null){
    return;
  }
  if($secret == $valor){
    imprime_vitoria();
  }
  else if($secret > $valor){
    imprime_maior();
  }
  else if($secret < $valor){
    imprime_menor();
  }
}

function imprime_secret(){
  echo <<<EOT
  <h1>Esta função foi introduzida apenas para fins de testes.
      Para demonstrar que o secret gerado é sempre o mesmo (só muda
      quando a página é recarregada com GET):</h1>

      <p>secret={$_SESSION["secret"]}</p>


EOT;

}

//destroi o segredo quando um novo jogo começa: requisição GET
if( $_SERVER["REQUEST_METHOD"] == "GET"){
  unset($_SESSION["secret"]);
}

if (! empty($_SESSION["secret"])){
  $secret = $_SESSION["secret"];
  $valor = $_POST["valor"];
}
else{
  $secret = rand(1,100);
  $_SESSION["secret"] = $secret;
  $valor = null;
}


 ?>

<html>
<head>
  <meta charset="utf-8">
  <title>Adivinhe o número </title>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
  <?php verifica_jogo($secret, $valor); ?>
  <form action='' method="POST">
    <input name="valor" type="text" id="valor"
    placeholder="digite um inteiro">

    <input type="submit" name="botao" value="Enviar">
  </form>
  <?php imprime_secret(); ?>
</body>
</html>
