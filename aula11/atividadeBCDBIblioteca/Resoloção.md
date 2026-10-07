# Biblioteca

1- criação de tabela

```sql
CREATE TABLE alunos(
    id SERIAL PRIMARY KEY,
    nome VARCHAR(50) NOT NULL
);
```

2- adicionar tabela emprestimos:

```sql
CREATE TABLE empresimos(
    id SERIAL PRIMARY KEY,
    livros VARCHAR(50) NOT NULL,
    id_aluno INT REFERENCES alunos (id)
);
```

3- adiciona os alunos

```sql
INSERT INTO alunos (nome) VALUES
('hannah'),
('miguel'),
('lila'),
('ryan'),
('manuela'),
('pedro'),
('kaylla'),
('eduardo'),
('felipe'),
('amanda'),
('abner'),
('joana'),
('jose'),
('maria'),
('guilherme');
```

4- adiciona livros

```sql 
INSERT INTO empresimos (livros, id ) VALUES
('O Pequeno Príncipe', 1) ,
('Alice no País das Maravilhas', 3),
('O jardim secreto', 6),
('Admiravel mundo novo', 10),
('O senhor dos anéis', 12),
('Jogos vorazes', 2),
('Dom casmurro', 4),
('Capitães de areia', 15),
('A bolsa amrela', 8),
('O cortiço', 9);
```


5- mostra os alunos que emprestaram livros

```sql
SELECT alunos.nome,empresimos.livros
FROM empresimos
INNER JOIN alunos ON empresimos.id_aluno = alunos.id
```

6- verifica os que não pegaram livro

```sql 
SELECT alunos.nome, emprestimos.livro
FROM alunos
LEFT JOIN emprestimos

ON alunos.id = emprestimos.id_aluno;
```

7- representa somente o que não pegaram nada:

```sql
SELECT alunos.nome
FROM alunos
LEFT JOIN emprestimos
ON alunos.id = emprestimos.id_aluno
WHERE emprestimos.id IS NULL;
```


> obs: se tentarmos colocar `INSERT INTO emprestimos (livro, id_aluno)
VALUES ('Turma da Mônica', 50);`, não funcionara, pois são apenas 15 alunos