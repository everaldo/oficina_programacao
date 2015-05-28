# Aula 28 de Maio


## Classes e Objetos

[Classes e Objetos - Manual do PHP](http://php.net/manual/pt_BR/language.oop5.php)


**Exercício Prático - Converter Contador**


## MySQL Foreign Key

[Tutorial - Chaves estrangeiras MySQL](http://www.mysqltutorial.org/mysql-foreign-key/)

[Documentação MySQL - Chaves estrangeiras](http://dev.mysql.com/doc/refman/5.6/en/create-table-foreign-keys.html)

**Retirado da documentação do MySQL**

````sql
[CONSTRAINT [symbol]] FOREIGN KEY
    [index_name] (index_col_name, ...)
    REFERENCES tbl_name (index_col_name,...)
    [ON DELETE reference_option]
    [ON UPDATE reference_option]

reference_option:
    RESTRICT | CASCADE | SET NULL | NO ACTION



````


CASCADE: deleta ou atualiza a linha da tabela pai, e automaticamente delete ou atualiza as linhas que "casam" na tabela filha. Ambos os comandos ON DELETE CASCADE e ON UPDATE CASCADE são suportados. Entre duas tabelas, não defina várias cláusulas ON UPDATE CASCADE que ajam na mesma coluna na tabela pai ou na tabela filha.

Observação: Atualmente, ações em cascata de chaves estrangeiras não ativam triggers (gatilhos).

SET NULL: deleta ou atualiza a linha na tabela pai, e atribui nulo (NULL) na coluna ou colunas da chave estrangeira. Ambas as cláusulas ON DELETE SET NULL e  ON UPDATE SET NULL são aceitas..

Se você especificar uma ação SET NULL, tenha certeza de que você não declarou colunas na tabela filho como NOT NULL.

RESTRICT: Rejeita as operações de delete ou update na tabela pai. Especificar RESTRICT (ou NO ACTION) é o mesmo que omitir as cláusulas ON DELETE ou ON UPDATE.

NO ACTION: Uma palavra chave do padrão SQL. No MySQL, é equivalente ao RESTRICT. O servidor MySQL rejeita as operações de delete ou update na tabela pai se há um valor de chave estrangeira relacionado na tabela de referência. Alguns bancos de dados tem sistemas de checagem de deferência, e NO ACTION é uma checagem de deferência (*deferred check*). No MySQL, constraints de chave estrangeiras são checadas imediatamente, então NO ACTION é o mesmo que RESTRICT.

SET DEFAULT: Essa ação é reconhecida pelo parser do MySQL, mas ambas engines InnoDB e NDB rejeitam definições de tabelas contendo cláusulas ON DELETE SET DEFAULT ou ON UPDATE SET DEFAULT.



## Algoritmo SHA-1


O Algoritmo de hashing Security Hash Algorithm - SHA-1
produz como saída uma string de 160bits, ou 20bytes em hexadecimal (40 caracteres, de 0 a 9 e A-F).




## SHA-1 em PHP


[Exemplo de uso da função SHA-1 em PHP](http://www.w3schools.com/php/func_string_sha1.asp)


## MySQL

[Documentação da função SHA-1() no MySQL](https://dev.mysql.com/doc/refman/5.5/en/encryption-functions.html#function_sha1)


## PHP com MySQL

[Código para checagem de senha com SHA-1 no PHP e MySQL](http://stackoverflow.com/questions/16177209/basic-mysql-sha1-password-valid-check)



## Funções disponíveis a partir do PHP 5.5.0


Em 20 de Junho de 2013, foi lançado o [PHP 5.5.0](http://php.net/ChangeLog-5.php#5.5.0).


Essa versão disponibiliza as funções **password_hash** e **password_verify** para criptografar
dados utilizando salt. Quando o salt não é passado como parâmetro, ele é gerado automaticamente.


O algoritmo utilizado é o bcrypt, porque nem o SHA-1 é considerado mais como seguro.

Veja [aqui](http://stackoverflow.com/questions/401656/secure-hash-and-salt-for-php-passwords)



[password_hash](http://php.net/manual/pt_BR/function.password-hash.php)

[password_verify](http://php.net/manual/en/function.password-verify.php)


### Retorno da Função password_hash

O retorno da função **password_hash** contém o algoritmo utilizado para criptografia (por padrão, bcrypt),
o "custo" do algoritmo e o próprio salt usado para a geração do hash. Só após essas informações é que há o
**hash** em si. Mas, o programador pode armazenar todas essas informações, numa coluna **VARCHAR(255)**
do banco de dados, porque **VANCHAR(60)** pode ser insuficiente com novos algoritmos de criptografia.

Então, a função **password_verify** compara automaticamente o hash gerado pela função **password_hash** com
a senha do usuário, retornando **TRUE** quando a senha for correta.

![retorno da função password_hash](http://php.net/manual/pt_BR/images/2a34c7f2e658f6ae74f3869f2aa5886f-crypt-text-rendered.svg)




````php

<?php
  $senha = 'Of!cinaDePr0gramaçã0';

  $hash = password_hash($senha, PASSWORD_DEFAULT);

  $salt =  substr($hash, 7, 22);


  $verificacao = password_verify($senha, $hash) ? "Verdadeiro" : "Falso";
  $teste_falso = password_verify("N@oEhaSenha", $hash) ? "Verdadeiro" : "Falso";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <title>Senhas com Password Hash (a partir do PHP 5.5.0)</title>
</head>
<body>

  <h1>Senhas com a função password_hash()</h1>

  <p> 
    <b>Senha:</b> <?php echo $senha ?></br>
    <b>Hash:</b> <?php echo $hash ?></br>
    <b>Salt:</b> <?php echo $salt ?></br>
    <b>Verificação:</b> <?php echo $verificacao ?></br>
    <b>Teste Senha Incorreta:</b> <?php echo $teste_falso ?></br>
  </p>
</body>
</html>


````

[Documentação da Função substr](http://php.net/manual/pt_BR/function.substr.php) utilizada para extrair
o salt do hash gerado (apenas para fins explicativos).

## Expressões Regulares


[PHP Live Regex](http://www.phpliveregex.com/)

[Processamento de Texto - Manual do PHP](http://php.net/manual/pt_BR/refs.basic.text.php)

## Leia Mais

[Manual do PHP - Gerando Hash Seguro de Senhas](http://php.net/manual/pt_BR/faq.passwords.php)
