# Projeto Proposto

Criar uma primeira versão de um serviço encurtador de URL (semelhante ao http://tinyurl.com)
Esse projeto terá novas funcionalidades adicionadas ao longo das aulas.


Nesta primeira versão, da aula de 07 de Maio de 2015, o projeto deve ter:

* Uma página, com um formulário com somente 1 campo, onde o usuário insere a URL que ele deseja encurtar.

Ao submeter o formulário, o sistema deve retornar uma outra página com um código da URL encurtada. Esse código
pode ser um número inteiro e sequencial: 1 para a primeira página, 2 para a segunda página, e assim por diante.

Exemplo:

Usuário entra com: wwww.pucpr.br
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





