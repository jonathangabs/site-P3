CREATE database site_;

use site_;

CREATE TABLE usuarios (
	id INT auto_increment PRIMARY KEY,
	nome VARCHAR(100),
    email VARCHAR(100),
    senha VARCHAR(100)
);