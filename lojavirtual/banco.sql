CREATE DATABASE lojavirtual;

USE lojavirtual;

CREATE TABLE usuarios (
  id_usuario INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  username VARCHAR(100) NOT NULL,
  senha VARCHAR(32) NOT NULL,
  data_cadastro DATETIME NOT NULL)