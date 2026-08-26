CREATE TABLE livros(
    id SERIAL PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    autor VARCHAR (50) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
     
)