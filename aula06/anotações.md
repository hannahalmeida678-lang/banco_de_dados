# aula 06

## analise de banco de dados

 para apagarum banco de dados se ele existir, utilizamos:

 ```sql
DROP DATABASE IF EXIST 

```

se ele existir, ele vai ser apagado, se não existir, ele vai mandar um avizo, de que não existe

**NOTICE** E **ERROR** NAO SÃO A MESMA COISA

### criar tabela

```sql
CREATE TABLE produtos(
    id SERIAL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    categoria VARCHAR (50) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    estoque INTEGER NOT NULL



);

```

#### visualizar tabela

```sql
SELECT * FROM produtos;
```

- **NÃO ESQUECER DE COMITAR OS CODIGOS DEPOIS DE EXECUTA-LOS PARA NÃO DAR ERRO**

- para ver a quantidade de linha:

```sql
SELECT COUNT(*) FROM produtos;
```

filtro de colunas e limitações de saída:

```sql

 SELECT nome,preco
 FROM produtos;

```

- para verificar apenas uma linha da tabela

```sql

SELECT DISTINCT categoria FROM produtos ORDER BY categoria

```

- para ver uma só categoria

```sql

SELECT nome,preco,estoque 
FROM produtos
WHERE categoria = 'Monitores';

```

- selecionar preço especifico

```sql
SELECT nome,preco
FROM produtos
WHERE preco >= 0 
AND PRECO = 500;

```

- uma outra forma que retorna o mesmo resultado:

```sql
SELECT nome,preco
FROM produtos
WHERE categoria ='Monitores' OR
categoria = 'notebook';

```

filtrando produtos que custam mais de 1000

```sql
SELECT nome,preco 
FROM produtos
WHERE preco > 1000;
```

```sql
SELECT nome,preco
FROM produtos
WHERE categoria ='Monitores' OR
categoria = 'notebook';
```

