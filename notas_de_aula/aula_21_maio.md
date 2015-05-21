# Aula 21 de Maio de 2015

 E-mail do Professor: everaldo.gomes@pucpr.br

Conteúdo:

* Banco de Dados (MySQL)

* Continuação dos Projetos Anteriores (Contador de Visitas, Log de Acesso, Chove ou Não-Chove e Encurtador de URLs)
  O conteúdo da aula anterior encontra-se no seguinte endereço: [Aula 07 de Maio](http://tinyurl.com/aula7demaio)

## Acesso ao Exercício da Aula Anterior

[Contador de Visitas](https://gist.github.com/everaldo/ea6fd3a34a5f0ec3785c)

## Acesso ao Banco de Dados


* O professor criou uma máquina virtual, com banco de dados e um usuário provisório para cada aluno, caso o phpmyadmin
local não funcione.

* Peça para o professor o endereço IP do servidor;

* Seu nome de usuário é seu primeiro nome. Caso haja mais de 1 aluno com o mesmo nome, então o nome de usuário é
formado pelo primeiro nome acrescido da primeira letra do primeiro sobrenome.

Exemplos:

|nome        | usuário  |
|------------|----------|
|Maria       |maria     |
|João Gustavo|joaog     |
|João Pedro  |joaop     |

### Conexão


Utilizando phpmyadmin: http://IP_DO_SERVIDOR/phpmyadmin

Utilizando mysql-client (Linux): mysql -h IP -u USUARIO -p

### Criando um banco de dados

[CREATE DATABASE](http://dev.mysql.com/doc/refman/5.6/en/create-database.html)

````
  create database <nome_do_banco_de_dados>;
````

* Observação: Como estamos todos utilizando o mesmo Sistema Gerenciador de Banco de Dados
no mesmo servidor, quando criar um banco de dados, use seu nome de usuário como prefixo.
Exemplo:

usuario: joao
banco de dados: visitas

````
  create database joao_visitas;
````

### Removendo banco de dados

[DROP DATABASE](http://dev.mysql.com/doc/refman/5.6/en/drop-database.html)


````
  drop database <nome_do_banco_de_dados>;
````

### Selecionar um banco de dados


Para selecionar qual banco de dados deseja utilizar, use o comando **use**

````
  use <nome_banco>;
````



### Criando Tabelas

[CREATE TABLE](http://dev.mysql.com/doc/refman/5.6/en/create-table.html)


````
  create table <nome_da_tabela>(
    nome_da_coluna <definicao_da_coluna>


  );

definicao_da_coluna:
    data_type [NOT NULL | NULL] [DEFAULT default_value]
      [AUTO_INCREMENT] [UNIQUE [KEY] | [PRIMARY] KEY]
      [COMMENT 'string']
      [COLUMN_FORMAT {FIXED|DYNAMIC|DEFAULT}]
      [STORAGE {DISK|MEMORY|DEFAULT}]
      [reference_definition]

principais tipos:

data_type:
  | INT[(length)] [UNSIGNED] [ZEROFILL]
  | INTEGER[(length)] [UNSIGNED] [ZEROFILL]
  | BIGINT[(length)] [UNSIGNED] [ZEROFILL]
  | REAL[(length,decimals)] [UNSIGNED] [ZEROFILL]
  | DOUBLE[(length,decimals)] [UNSIGNED] [ZEROFILL]
  | FLOAT[(length,decimals)] [UNSIGNED] [ZEROFILL]
  | DECIMAL[(length[,decimals])] [UNSIGNED] [ZEROFILL]
  | DATE
  | TIME[(fsp)]
  | TIMESTAMP[(fsp)]
  | DATETIME[(fsp)]
  | YEAR
  | CHAR[(length)] [BINARY]
      [CHARACTER SET charset_name] [COLLATE collation_name]
  | VARCHAR(length) [BINARY]
      [CHARACTER SET charset_name] [COLLATE collation_name]
  | BINARY[(length)]
  | TINYTEXT [BINARY]
      [CHARACTER SET charset_name] [COLLATE collation_name]
  | TEXT [BINARY]
      [CHARACTER SET charset_name] [COLLATE collation_name]

outras definições do create, mais utilizadas:

  | [CONSTRAINT [symbol]] PRIMARY KEY [index_type] (index_col_name,...)
      [index_option] ...
  | {INDEX|KEY} [index_name] [index_type] (index_col_name,...)
      [index_option] ...
  | [CONSTRAINT [symbol]] UNIQUE [INDEX|KEY]
      [index_name] [index_type] (index_col_name,...)
      [index_option] ...

````

### Alterando uma tabela

No momento em que a tabela é criada, podem ser fornecidas todas as colunas e definições.

Mas, se o usuário desejar criar/alterar ou remover colunas e definições pode utilizar o comando alter table


[ALTER TABLE](http://dev.mysql.com/doc/refman/5.6/en/alter-table.html)


O comando Alter Table será discutido com mais detalhes posteriormente.


### Exemplo, criando tabela para o exercício do contador de visitar

````
  use contador; #antes, crie o banco com o comando: create database contador;

  create table visitas(
      total int not null default 0 primary key
  );
````

#### Consultas para o exercício do contador

Selecionando a quantidade de visitas

````
  SELECT total from `visitas` ORDER BY total ASC LIMIT 1
````

Atualizando o número de visitantes (contando):

````
  UPDATE `visitas` SET total = total + 1
````


## Exercício

Para o Projeto de Log de Acesso, é necessário obter o nome do script php, o endereço ip do usuário e lidar com data e hora

[Obtendo o nome do script php](http://stackoverflow.com/questions/13032930/how-to-get-current-php-page-name)

Para obter o IP, use a entrada **REMOTE_ADDR** do objeto global **$_SERVER**

[$_SERVER['REMOTE_ADDR']](http://php.net/reserved.variables.server)

Observação: Isso pode não funcionar perfeitamente na rede local, mas será otimizado/corrigido posteriormente

Sobre datas e horas no MySQL:

[Os tipos DATE, DATETIME e TIMESTAMP](http://dev.mysql.com/doc/refman/5.5/en/datetime.html)

[Inicialização automática e atualização para TIMESTAMP](http://dev.mysql.com/doc/refman/5.5/en/timestamp-initialization.html)

[Literais para DATE e TIME](http://dev.mysql.com/doc/refman/5.5/en/date-and-time-literals.html)


* Criando banco de dados

````
  create database <nome_usuario>_<access_log>;
````

* Criando tabela:


````
  use <nome_usuario>_<access_log>;


  create table logs(
    id int auto_increment primary key,
    pagina varchar(20) not null,
    ip varchar(50) not null,
    horario datetime //poderíamos ter utilizado timestamp. Vamos usar datetime para fins de exercício

  );

````

O phpmyadmin permite gerar o código php para a consulta


````php
$sql = "create table logs(\n"
    . " id int auto_increment primary key,\n"
    . " pagina varchar(50) not null,\n"
    . " ip varchar(50) not null,\n"
    . " horario datetime not null\n"
    . " )";

````

### Inserindo um registro


Vamos inserir um registro na tabela, para fins de teste.

````
  INSERT INTO  `<nome_do_banco>`.`<nome_da_tabela>` (
    `id` , `pagina` , `ip` , `horario`)
        VALUES (NULL ,  'home.php',  '192.168.192.168',  '2015-05-21 00:00:00'
);
````

Código php:

````php
$sql = "INSERT INTO `logs` (\n"
    . " `id` , `pagina` , `ip` , `horario`)\n"
    . " VALUES (NULL , \'home.php\', \'192.168.192.169\', \'2015-05-22 00:00:00\')\n"
    . "";
````

Use **`<nome_do_banco>`.`<nome_da_tabela>`** apenas se não tiver usado o comando **use <nome_do_banco>**,
senão é possível usar apenas **`<nome_da_tabela>` no comando insert.

Note que o valor NULL é usado na coluna id, pois o valor da chave primária é obtido automaticamente porque
foi definido como auto_increment

### Consulta

Uma consulta simples, que retorna os resultados por ordem decrescente de visita

````
  SELECT pagina, ip, horario FROM  `logs` ORDER BY horario DESC
````

Respectivo código php:

````php
  $sql = " SELECT pagina, ip, horario FROM `logs` ORDER BY horario DESC\n"
```` 


**Nas próximas aulas não retornaremos todos os registros. Usaremos um recurso chamado paginação - LIMIT e OFFSET - para retornar
30 resultados por consulta**


# Exercícios

* Faça um site que funcione como um "biscoito da sorte". Cada vez que o usuário entrar no site, deve ser exibida uma frase diferente

Você pode criar uma página chamada cadastro.php com um formulário para cadastrar novas frases no site.

Use a função rand() para selecionar uma frase aleatória

````
  select frase from `biscoito_da_sorte` order by rand() limit 1;
````




