# aula 12

## normalização de Banco de dados

pbjetivo: normalizar um BCD com problemas organização de registros.

### 1fn

!- criar banco

```sql
CREATE DATABASE (nome da empresa);
```


2- criar tabela

```sql
CREATE TABLE cadastro_original(
    funcionario_id INTEGER PRIMARY KEY,
    nome TEXT,
    setor_id INTEGER,
    setor_nome TEXT,
    treinamento TEXT
);
```

3- inserimos dados:

```sql
INSERT INTO cadastro_original VALUES 
(2, 'victor',10, 'montagem', 'segurança;ferramentas'),
(1, 'miguel',20, 'manutencao', 'seguranca'),
(3, 'lucas', 10, 'montagem', 'ferramentas');
```

4-  ao realizar a primeira consulta, verificamos que ele coloca dois valores na mesma linha

5- para organizar os dados

```sql
CREATE TABLE cadastro_1fn AS
SELECT funcionario_id,nome,setor_id,setor_nome, 
    string_to_table(treinamento, ';') AS treinamentos
FROM cadastro_original
```

6- aplicamos a primeira 1fn:

``` sql
ALTER TABLE cadastro_1fn
ADD PRIMARY KEY (funcionario_id, treinamentos);
```

### 2fn 

1- criamos tabela de funcionarios

```sql 
 CREATE TABLE funcionarios AS 
 SELECT DISTINCT funcionario_id,nome,setor_id,setor_nome FROM  cadastro_1fn
```

> o dinstinct evita copiar linhas iguais mais de uma vez. ou seja, os dois trenamentos do victor, viram um só.

2- o comando CREATE TABLE AS nao tras chaes primarias automaticamene, dessA forma executamos o comando

```sql 
ALTER TABLE funcionarios
ADD PRIMARY KEY (funcionario_id);
```

3- ciamos a tabela participacoes, trazendo apenas id do funcionario e treinamento

```sql 
CREATE TABLE participaçoes AS 
SELECT funcionario_id, treinamentos FROM cadastro_1fn;
```

5- adicionando chaves estrangeira(relacoes entre tabelas)

```sql 
ALTER TABLE participaçoes 
ADD  FOREIGN KEY (funcionario_id) 
REFERENCES funcionarios(funcionario_id);
```

6- verificando a 2fn


### 3FN

objetivo: separar os setores

1- criar tabela setores

```sql
CREATE TABLE setores AS SELECT DISTINCT setor_id, setor_nome
FROM funcionarios;
```

2- adicionando chave preiamria

```sql
ALTER TABLE setores ADD PRIMARY KEY (setores.id)
```

3- criamdo chave estarngeira

```sql
ALTER TABLE funcionarios
ADD FOREIGN KEY (setor_id) REFERENCES setores(setor_id);
```

4- CORREÇÃO NO ERRO NA HORA DE CRIAR A TABELA

```SQL
ALTER TABLE funcionarios
ALTER COLUMN setor_id SET NOT NULL;
```

5- deletar coluna

```sql
ALTER TABLE funcionarios
DROP  COLUMN setor_nome;
```

7- atualizar

```sql
UPDATE setores SET setor_nome = 'produçao' WHERE setor_id = 10;
```
