create database jogoadivinha;
use jogoadivinha;
set names utf8;


create table ufs(
  codigo int not null primary key,
  nome varchar(255) collate utf8_unicode_ci not null,
  sigla varchar(2) collate utf8_unicode_ci not null
) charset=utf8 collate=utf8_unicode_ci ;

create table municipios (
  id int not null auto_increment primary key,
  uf_id int not null,
  codigo int not null,
  nome varchar(255) collate utf8_unicode_ci not null,
  foreign key (uf_id) references ufs(codigo) on delete cascade

) charset=utf8 collate=utf8_unicode_ci ;


create table usuario(
  id int primary key auto_increment,
  email varchar(255) not null,
  senha varchar(255) not null,
  municipio_id int not null,
  uf_id int not null,
  foreign key (municipio_id) references municipios(id),
  foreign key (uf_id) references ufs(codigo)
);


create table jogo(
  id int primary key auto_increment,
  usuario_id int not null,
  segredo int not null,
  status varchar(255) not null,
  hora datetime not null,
  foreign key (usuario_id) references usuario(id) on delete cascade
);

create table jogadas(
  id int primary key auto_increment,
  jogo_id int not null,
  palpite int not null,
  hora datetime not null,
  foreign key (jogo_id) references jogo(id) on delete cascade
);

