CREATE DATABASE IF NOT EXISTS academia;
USE academia;

CREATE TABLE cliente (
codigo int PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100),
telefone INT(13)
dataCadastro DATE
);

CREATE TABLE pagamaneto (
codigo INT PRIMARY KEY AUTO_INCREMENT
codigoCliente INT,
nomeCliente VARCHAR(100),
dataPagamento DATE,
valorPagamento DECIMAL(5,2)
FOREIGN KEY (codigoCliente) REFERENCES cliente(codigo),
);
