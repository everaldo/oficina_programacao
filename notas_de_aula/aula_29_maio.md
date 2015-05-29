# Aula 29 de Maio de 2015



# Importação / Exportação no PHPMyAdmin


Explore as opções de importar/exportar bancos de dados
no phpmyadmin.


# Projetos - Encurtador de URLs


Comece a implementar o projeto de Encurtador de URLs:

[Projeto Encurtador de URLs](https://github.com/everaldo/oficina_programacao/blob/master/notas_de_aula/aula_07_maio.md#projeto-encurtador-de-url)


Mas, ao invés de implementar uma URL curta com código 1, 2, 3, use uma hash produzida com sha-1 ou password_hash.

Você vai precisar usar a função de substring: **substr**, para extrair somente parte do hash.

Use uma substring de tamanho 6 para as URLs curtas.


**Importante**

Como não estamos trabalhando com as opções de **URL rewrite** do servidor apache (ou nginx),

O site de URLs curtas vai se chamar "p.php" e uma URL curta vai ser disposta no seguinte esquema:

http://localhost/p.php?c=<CODIGO DA URL CURTA>

Exemplo:

http://localhost/p.php?c=AjQx1W

Ficticiamente, poderia redirecionar para:

https://github.com/everaldo/oficina_programacao/tree/master/notas_de_aula


A página que encurta URLs deve se chamar:


http://localhost/encurta.php


Ela deve contar um formulário, onde o usuário insere a URL que deseja encurtar.

Quando o formulário for submetido, o sistema deve criar o hash para a URL e salvar
ambas no banco de dados, numa base de dados com nome **encurta**.

O nome da tabela utilizada pode ser **urls_curtas**.

Segue esquema da tabela:

| id (chave primária, auto incremento) | url (varchar(255) | codigo (varchar(10)) |
---------------------------------------|-------------------|----------------------|
| 1 | https://github.com/everaldo/oficina_programacao/tree/master/notas_de_aula | AjQx1W |

O campo **codigo** armazena a url curta. Usaremos 10 caracteres, pois futuramente
o sistema pode precisar de mais espaço para armazenamento. (Mas eu garanto que 6
seriam suficientes :-) ).

Consulta:

````sql
  insert into urls_curtas(id,url,codigo) values(NULL, $url, $hash_code)
````


# Redirecionamento

A página que recebe o código das URLs curtas **p.php**, possui o parâmetro **c**,
que armazena o código da URL curta. Usamos a letra c e a letra p, porque o nosso
objetivo é encurtar a URL. :-)


Essa página deve implementar um redirecionamento para a página original que foi salva.


Consulta no banco: 


````sql
  select url, codigo from urls_curtas where codigo = $codigo
````

Redirecionamento:

[Redirect em PHP - Locaweb](http://wiki.locaweb.com/pt-br/Redirect_em_PHP)



