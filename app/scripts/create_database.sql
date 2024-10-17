CREATE DATABASE IF NOT EXISTS ifpr;

USE ifpr;

CREATE TABLE IF NOT EXISTS estilo (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS filme (
    id INT NOT NULL AUTO_INCREMENT,
    estilo_id INT NOT NULL,
    nome VARCHAR(100) NOT NULL,
    ano INT NOT NULL,
    duracao INT NOT NULL DEFAULT 0,
    foto VARCHAR(200) NOT NULL,
    sinopse VARCHAR(500),
    PRIMARY KEY (id),
    FOREIGN KEY (estilo_id) REFERENCES estilo(id)
);

CREATE TABLE IF NOT EXISTS cliente (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    endereco VARCHAR(120),
    telefone VARCHAR(30) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS locacao (
    id INT NOT NULL AUTO_INCREMENT,
    filme_id INT NOT NULL,
    cliente_id INT NOT NULL,
    emissao DATE NOT NULL,
    devolucao DATE NOT NULL,
    valor DOUBLE NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (filme_id) REFERENCES filme(id),
    FOREIGN KEY (cliente_id) REFERENCES cliente(id)
);

CREATE TABLE usuario (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    usuario VARCHAR(100) NOT NULL,
    senha VARCHAR(100) NOT NULL,
    PRIMARY KEY(id)
);

insert into usuario (nome, usuario, senha) values ("Armando Tramoia", "armando", "123");