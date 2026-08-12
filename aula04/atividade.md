# Aula 04 - Criação e edição do primeiro banco de dados


- PRIMEIRO, FUI NO SERVIDO E CRIEI O CIDADES NO POSTGRES.
 E- PARA CRIAR A TABELA, UTILIZEI:
```sql
DROP TABLE IF EXISTS maiorescidades;

 CREATE TABLE maiorescidades( 
    id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY, 
    nome VARCHAR(100) NOT NULL, 
     populacao BIGINT NOT NULL 
 );

 INSERT INTO maiorescidades (nome, populacao) VALUES
('Tóquio', 39000000),
 ('Nova Delhi', 32941000),
 ('Xangai', 29210000),
 ('Dhaka', 23210000),
 ('São Paulo', 22430000);
 ```
