DROP DATABASE IF EXISTS coisas_emprestadas;
CREATE DATABASE IF NOT EXISTS coisas_emprestadas;
USE coisas_emprestadas;

CREATE TABLE IF NOT EXISTS usuarios(
    idUsuario int primary key auto_increment,
    nomeUsuario varchar(45),
    email varchar(45) unique not null,
    telefone varchar(15) unique not null,
    senha varchar(8) not null,
    endereco varchar(45) not null
);

CREATE TABLE IF NOT EXISTS produtos(
    idProduto int primary key auto_increment,
    nomeProduto varchar(45),
    categoria varchar(45)
);

CREATE TABLE IF NOT EXISTS emprestimos(
    idRegistro int primary key auto_increment,
    dataDev date,
    idUsuario int,
    idProduto int,
    foreign key(idUsuario) references usuarios(idUsuario),
    foreign key(idProduto) references produtos(idProduto)
);

INSERT INTO usuarios(nomeUsuario, email, telefone, senha, endereco)
VALUES (
        'admin',
        'admin@admin.com',
        '123456',
        '1234',
        'rua admin'
    );

INSERT INTO usuarios(nomeUsuario, email, telefone, senha, endereco)
VALUES (
        'bruno',
        'bruno@gmail.com',
        '1234',
        '1234',
        'rua bruno'
    );

INSERT INTO produtos(nomeProduto, categoria)
VALUES ("Camisa", "Roupa"),
    ("Caderno de Negocio", "Livro"),
    ("X-box", "Eletronico");

INSERT INTO emprestimos(dataDev, idUsuario, idProduto)
VALUES ("21-08-08", 1, 1),
    ("21-08-08", 1, 2),
    ("21-08-08", 1, 3);

INSERT INTO emprestimos(dataDev, idUsuario, idProduto)
VALUES ("08-11-21", 2, 1),
    ("19-10-21", 2, 2);

SELECT email, senha
FROM usuarios
WHERE email = "admin@admin.com";

SELECT nomeProduto, categoria, nomeUsuario, dataDev
FROM produtos
INNER JOIN emprestimos
INNER JOIN usuarios
WHERE emprestimos.idUsuario = usuarios.idUsuario
    and emprestimos.idProduto = produtos.idProduto;
SELECT *
FROM emprestimos
ORDER BY idRegistro DESC;
SELECT *
FROM produtos;