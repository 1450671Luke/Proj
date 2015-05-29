CREATE DATABASE ledzone;
USE ledzone;
CREATE TABLE cliente(
	cod_cliente INT AUTO_INCREMENT NOT NULL,
    nome_empresa VARCHAR(25) NULL,
    nome VARCHAR(25) NULL,
    sobrenome VARCHAR(25) NULL,
    dt_nascimento DATE NULL,
    idade INT NULL,
    sexo CHAR(1) NULL,
    rg INT NULL,
    cpf INT NULL,
    telefone VARCHAR(15) NULL,
    celular VARCHAR(15) NULL,
    rua VARCHAR(30),
    numero INT NULL,
    bairro VARCHAR(30) NULL,
    estado CHAR(2) NULL,
    cidade VARCHAR(20) NULL,
    cep INT NULL,
    email VARCHAR(200) NULL,
    nickname VARCHAR(20) NULL,
    senha VARCHAR(50) NULL,
    foto_cliente CHAR (40) NULL,
    PRIMARY KEY(cod_cliente));
    
    CREATE TABLE empresa(
	cod_empresa INT AUTO_INCREMENT NOT NULL,
    nome_empresa VARCHAR(25) NULL,
    nome VARCHAR(25) NULL,
    sobrenome VARCHAR(25) NULL,
    telefone VARCHAR(15) NULL,
    celular VARCHAR(15) NULL,
    rua VARCHAR(30),
    numero INT NULL,
    bairro VARCHAR(30) NULL,
    estado CHAR(2) NULL,
    cidade VARCHAR(20) NULL,
    cep INT NULL,
    foto_empresa CHAR (40) NULL,
    PRIMARY KEY(cod_empresa));

CREATE TABLE novo_produto(
	cod_produto INT AUTO_INCREMENT NOT NULL,
	nome_empresa VARCHAR(50) NULL, 
	categoria VARCHAR(50) NULL, 
	nome_produto VARCHAR(50) NULL, 
    preco_produto DECIMAL(10,2) NULL, 
    modelo_produto VARCHAR(50) NULL, 
    tamanho FLOAT NULL, 
    cor_produto VARCHAR(25) NULL, 
    pequena_descricao VARCHAR(2000) NULL,
    qt_estoque INT NULL,
    foto_produto CHAR (40) NULL,
    PRIMARY KEY(cod_produto));

CREATE TABLE contato(
	nome_cliente VARCHAR(50) NULL,
	assunto VARCHAR(1000) NULL,
	mensagem VARCHAR(2000) NULL,
    cod_cliente INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(cod_cliente)
);

select *
from cliente;

SELECT * FROM empresa WHERE cod_empresa = 5;

UPDATE novo_produto set nome_empresa = 'Lucas Marques', nome_produto = 'fasdfsdfsdfasdf', preco_produto = '0.00', modelo_produto = '', tamanho = '0', cor_produto = '', pequena_descricao = ' Pequena descrição"Pequena descrição', qt_estoque = '0', foto_produto = '6e8b055634554f6664d645fdff66f3cf.'WHERE nome_empresa = 'Lucas Marques';
