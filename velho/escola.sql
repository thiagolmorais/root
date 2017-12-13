CREATE DATABASE escola;
USE escola;

CREATE TABLE aluno
(
	cd_aluno INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
	cd_cpf VARCHAR(11) NOT NULL UNIQUE,
	nm_aluno VARCHAR(50) NOT NULL,
	dt_nascimento VARCHAR(10) NOT NULL,
	ds_endereco VARCHAR(200) NOT NULL,
	mn_genero VARCHAR(10) NOT NULL,
	nm_email VARCHAR(30) NOT NULL UNIQUE,
	nm_usuario VARCHAR(20) NOT NULL UNIQUE,
	nm_senha VARCHAR(20) NOT NULL,
	nm_curso VARCHAR(20) NOT NULL
);