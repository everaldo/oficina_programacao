# Projeto Proposto

Criar uma primeira versão de um serviço encurtador de URL (semelhante ao http://tinyurl.com)
Esse projeto terá novas funcionalidades adicionadas ao longo das aulas.


Nesta primeira versão, da aula de 07 de Maio de 2015, o projeto deve ter:

* Uma página, com um formulário com somente 1 campo, onde o usuário insere a URL que ele deseja encurtar.

Ao submeter o formulário, o sistema deve retornar uma outra página com um código da URL encurtada. Esse código
pode ser um número inteiro e sequencial: 1 para a primeira página, 2 para a segunda página, e assim por diante.

Exemplo:

Usuário entra com: www.pucpr.br

Sistema retorna: 1

Usuário entra com: www.wikipedia.com.br

Sistema retorna: 2


Nessa mesma página, deve haver outro formulário, onde o usuário entra com o código da URL encurtada e o sistema
não deve retornar nenhuma página para o usuário, mas sim redirecioná-lo para a página que teve a URL encurtada.

Exemplo:

Usuário entra com: 1

Sistema redireciona para www.pucpr.br

Usuário entra com: 2

Sistema redireciona para www.wikipedia.com.br

Dado que, esses foram os valores previamente cadastrados.


Como mencionado anteriormente, esse projeto será melhorado ao longo das próximas aulas, integrando todos os conceitos
já vistos na disciplina, e os próximos conceitos, tais como bancos de dados - MySQL


# PHP/MySQL


### Criar banco de dados

[mysql_createdb](http://php.net/manual/pt_BR/function.mysql-create-db.php)

### Conectar-se ao servidor

[mysql_connect](http://php.net/manual/pt_BR/function.mysql-connect.php)

### Selecionar banco de dados

[mysql_select_db](http://php.net/manual/pt_BR/function.mysql-select-db.php)


### Para consultas: SELECT, INSERT, UPDATE, DELETE

[mysql_query](http://php.net/manual/pt_BR/function.mysql-query.php)

### Inspecionar erro e código de erro, caso uma consulta falhe

[mysql_error)(http://php.net/manual/pt_BR/function.mysql-error.php)

[mysql_errno](http://php.net/manual/pt_BR/function.mysql-errno.php)

### Contar o número de linhas retornadas (caso a consulta não tenha sido bufferizada)

[mysql_num_rows](http://php.net/manual/pt_BR/function.mysql-num-rows.php)


### Obter dados da consulta e move ponteiro adiante

[mysql_fetch_assoc](http://php.net/manual/en/function.mysql-fetch-assoc.php)

[mysql_fetch_array](http://php.net/manual/en/function.mysql-fetch-array.php)


### Obter dados da linha, num array

[mysql_fetch_row](http://php.net/manual/pt_BR/function.mysql-fetch-assoc.php)

### Liberar recursos

[mysql_free_result](http://php.net/manual/pt_BR/function.mysql-free-result.php)


## Referência Geral

[Lista com todas as funções](http://php.net/manual/pt_BR/book.mysql.php)


# Referência MySQL

### Criar, alterar e remover usuário

[CREATE USER](http://dev.mysql.com/doc/refman/5.6/en/create-user.html)

[ALTER USER](http://dev.mysql.com/doc/refman/5.6/en/alter-user.html)

[DROP USER](http://dev.mysql.com/doc/refman/5.6/en/drop-user.html)

### Garantir e retirar privilégios de usuários

[GRANT](http://dev.mysql.com/doc/refman/5.6/en/grant.html)

[REVOKE](http://dev.mysql.com/doc/refman/5.6/en/revoke.html)

### Criar e remover banco de dados

[CREATE DATABASE](http://dev.mysql.com/doc/refman/5.6/en/create-database.html)

[DROP DATABASE](http://dev.mysql.com/doc/refman/5.6/en/drop-database.html)

### Criar e remover tabelas

[CREATE TABLE](http://dev.mysql.com/doc/refman/5.6/en/create-table.html)

[DROP TABLE](http://dev.mysql.com/doc/refman/5.6/en/drop-table.html)


### Selecionar, atualizar, inserir e remover dados

[SELECT](http://dev.mysql.com/doc/refman/5.6/en/select.html)

[UPDATE](http://dev.mysql.com/doc/refman/5.6/en/update.html)

[INSERT](http://dev.mysql.com/doc/refman/5.6/en/insert.html)

[DELETE](http://dev.mysql.com/doc/refman/5.6/en/delete.html)











