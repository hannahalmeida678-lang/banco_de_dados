# aula 06

PARA APRESENTAR UM NUMERO LIMITADO DE LINHAS:

```sql
SELECT COUNT(*) FROM produtos;
```

para realizar contagen de uma linha da tabrela:

```sql
SELECT COUNT(*) AS total_registros
FROM produtos
```

- sempre colocar `>=` para contar todos os produtos.

- 30% abaixo do estoque minimo (10)
- 70% acima do estoque minimo incluindo um produto com exatamente 10 unidades

para aplicar filtro nas colunas:

```sql
SELECT COUNT (*) AS produtos_baixo_estoque FROM produtos
WHERE estoque >= 10;
```

## funções

`COUNT(*)`: função de contagem

para exibir um produto de maior valor:

```sql
SELECT MAX(preco) AS maior_preco FROM produtos;
```

caso queira saber o nome do produto mais caro:

```sql
SELECT nome,preco FROM produtos ORDER BY preco DESC;
```

mais barato

```sql

SELECT nome,preco FROM produtos ORDER BY preco DESC;
```

media:

```sql
SELECT AVG(preco) AS media_precos FROM produtos;
```
media CORRETA:

```sql
 SELECT ROUND(AVG(preco),2) AS media_correta FROM produtos
```

exibir maior preço, menor preço, a media da tabela:

```sql
SELECT 
MAX(preco) AS maior_preco,
MIN(preco)AS menor_preco ,
ROUND(AVG(preco),2) AS media_correta
FROM produtos;
```

total produtos

```sql
SELECT SUM(estoque) AS total_produtos from produtos;
```

exibir maior preço, menor preço, a media e a quantidade de produtos da tabela:

```sql
SELECT
 MAX(preco) AS maior_preco,
 MIN(preco)AS menor_preco ,
 ROUND(AVG(preco),2) AS media_correta,
 SUM(estoque) as TOTAL_produtos
 FROM produtos;
 ```

para somar o total de fatoramento vendendo todos os produtos da terabyte:

 ```sql
 SELECT SUM(preco * estoque) 
AS total_faturamento_por_produto 
FROM produtos;
```

___ 