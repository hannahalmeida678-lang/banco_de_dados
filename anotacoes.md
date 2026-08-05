## SGBD
```bash
SUDO apt install 
```
# 5432 --> 
---
realizando verificação
``` bash
pg_lsclusters
```
para realizar o acesso do sgbd comando:
``` bash
sudo -u postgres psgl
```
> com esse comando, o acesso e feito sem senha, pois o linux ja provou quem você é(root). autenticação PEER
```sql
ALTER USER postgres PASSWORD '1234';
```
> o retorno correto é 'ALTER ROLE'
para sair comando `\q`
```mermaid
graph LR
A[sudo -U postgres psql]--altenticação -->b[so funciona entrando dentro do proprio linux]
```
```mermaid
graph LR
A[sudo psql -h 127.0.0.1 -U postgres ]--altenticação -->b[funciona vindo de qualquer maquina, porém e necessario inserir a senha]