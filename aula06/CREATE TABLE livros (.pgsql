 CREATE TABLE livros (
     id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY, 
    nome VARCHAR(100) NOT NULL,
    autor VARCHAR(100) NOT NULL,
    genero VARCHAR (100) NOT NULL,
    preco INT (3,1) NOT NULL,
    estoque DECIMAL (3,1) NOT NULL, 
    ano_publicacao INT(4) NOT NULL,

);
