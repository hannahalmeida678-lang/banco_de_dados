-- --  CREATE TABLE produtos(
-- --    id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
-- --      nome VARCHAR(50) NOT NULL,
-- --      preço NUMERIC(10,2) NOT NULL,
-- --      estoque INT NOT NULL DEFAULT 0
-- --  );


-- --inserindo valores
-- INSERT INTO produtos(nome,preço,estoque)
-- VALUES('iphone 17','10000.00','15');

-- consultando todos os dados
-- SELECT * FROM produtos;

DELETE FROM produtos WHERE id=2;

SELECT id FROM produtos