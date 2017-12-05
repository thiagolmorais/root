create table cadastro(
    codigo INTEGER NOT NULL AUTO_INCREMENT,
    usuario VARCHAR(50) UNIQUE,
    email VARCHAR(50) UNIQUE,
    senha VARCHAR(50),
    confirmar_senha VARCHAR(50),
    PRIMARY KEY(codigo)
    );