-- -- -Criar um banco de dados de Streaming de Filmes e Séries 
-- -- - Realizar o acesso via VsCode 
-- -- - Criar uma tabela com Filmes e Séries (30 registros)
-- -- -Colunas: ID, nome, duração (minutos), nota (0 a 10)
-- -- - Consultem, após a criação, somente o nome e nota dos filmes (filtro de colunas)
-- -- - Atualizem a nota de, pelo menos, 5 filmes (filmes que você já viu)
-- -- -- - No final, por ser uma base muito grande, o SSD do seu PC, ficou cheio. Logo, apagar os 5 filmes com avaliação mais baixa.

-- CREATE TABLE filmes_series (
--     id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY, 
--     nome VARCHAR(100) NOT NULL,
--     duracao INT NOT NULL,
--     nota DECIMAL(3,1) NOT NULL
-- );





 INSERT INTO filmes_series (nome,   duracao , nota ) VALUES
 ('law & order: special victims unit', 60, 8 ),
 ('o Diabo veste Prada 2', 120, 8 ),
 ( 'Epic: a odisseia musical', 136, 9.2 ),
 ( 'apocalipse', 60, 4 ),
 ( 'branca de neve 2025', 109, 2.2 ),
 ( 'gardiões da galaxia', 121, 8.0 ),
 ( 'my hero academia', 24, 8.2 ),
 ( 'Sweet Tooth', 50, 7.7 ),
 ( 'O Rei Leão 2019', 118, 6.8 ),
 ('One Piece', 24, 8.9),
 ('Homem-Aranha: Através do Aranhaverso', 140, 8.9),
 ('os mutantes: caminhos do coração', 60, 3.4),
 ('WandaVision' , 40, 7,9),
 ('Descendentes: País das Maravilhas Malvado', 40, 5),
 ('Doctor Who', 45, 8.5),
 ('my little pony: friendship is magic', 22, 7.8,),
 ('Dragonball Evolution', 85, 2,5 ),
 ('Velozes e furiosos', 106, 6,8),
 ('madame teia', 116, 4),
 ('paulo, o apostolo', 56, 8.8 ),
 ('vingadores: Ultimato', 180, 8,4),
 ('Homem-Aranha: Sem Volta para Casa', 148, 8),
 ('Um Príncipe em Nova York', 117, 7),
 ('como magica', 98, 7),
 ('a odisseia', 172, 8.5),
 ('Moana: Um Mar de Aventuras', 107, 7.5),
 ('Barbie em A Princesa e A Plebeia', 8.5, 7.0),
 ('Jogos Vorazes', 142, 7.0),
 ('Dr. House', 45, 8.7),
 ('Acampados', 30, 5.5);

SELECT * FROM filmes_serie;






