create database curriculo;

use curriculo;

create table usuarios(
id int auto_increment primary key,
nome VARCHAR(100) not null,
email VARCHAR(50) not null,
tel VARCHAR(13) not null,
cpf VARCHAR(13) not null,
rg VARCHAR(13) not null,
endereco VARCHAR(140) not null,
genero VARCHAR(10) not null,
formacao VARCHAR(120) not null,
objetivo VARCHAR(120) not null
);


