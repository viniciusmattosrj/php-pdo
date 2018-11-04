--Criando database
CREATE DATABASE curso_pdo;

--Criação tabela
CREATE TABLE users(
    id int(11) auto_increment PRIMARY KEY,
    name varchar(50) not null,
    email VARCHAR(50) not null unique key not null,
    password varchar(150) null,
    created_at timestamp default current_timestamp
);

--Exibindo a estrutura da tabela
desc users

--Apagando tabela
DROP TABLE users;

--Criação tabela
CREATE TABLE posts(
    id int(11) auto_increment PRIMARY KEY,
    title varchar(50) not null,
    user int(11) not null,
    description text not null,
    created_at timestamp default current_timestamp
);

--Exibindo a estrutura da tabela
desc posts

--Apagando tabela
DROP TABLE posts;

INSERT INTO users (name, email, password)
VALUES('Vinicius','vinimattos.rj@gmail.com','123');