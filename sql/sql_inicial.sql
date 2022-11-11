drop database if exists coisas_emprestadas;
create database if not exists coisas_emprestadas;
use coisas_emprestadas;

create table if not exists usuarios(
	idUsuario int primary key auto_increment,
    nomeUsuario varchar(45),
    email varchar(45) unique not null,
    telefone varchar(15) unique not null,
    senha varchar(8) not null,
    endereco varchar(45) not null
);

create table if not exists produtos(
	idProduto int primary key auto_increment,
    nomeProduto varchar(45),
    categoria varchar(45)
);

create table if not exists emprestimos(
	idRegistro int primary key auto_increment,
    dataDev date,
	idUsuario int,
    idProduto int,
    foreign key(idUsuario) references usuarios(idUsuario),
    foreign key(idProduto) references produtos(idProduto)
);

insert into usuarios(nomeUsuario, email, telefone, senha, endereco) values
	('admin', 'admin@admin.com', '123456', '1234', 'rua admin');
    
insert into usuarios(nomeUsuario, email, telefone, senha, endereco) values
	('bruno', 'bruno@gmail.com', '1234', '1234', 'rua bruno');
    
insert into produtos(nomeProduto, categoria) values
	("Camisa", "Roupa"),
    ("Caderno de Negocio", "Livro"),
    ("X-box", "Eletronico");
    
insert into emprestimos(dataDev, idUsuario, idProduto) values
	("21-08-08", 1, 1),
    ("21-08-08", 1, 2),
    ("21-08-08", 1, 3);
    
insert into emprestimos(dataDev, idUsuario, idProduto) values
	("08-11-21", 2, 1),
	("19-10-21", 2, 2);
    
select email, senha from usuarios where email = "admin@admin.com";
SELECT nomeProduto, categoria, nomeUsuario, dataDev FROM produtos INNER JOIN emprestimos INNER JOIN usuarios WHERE emprestimos.idUsuario = usuarios.idUsuario and emprestimos.idProduto = produtos.idProduto;
select * from emprestimos order by idRegistro desc;
select * from produtos;