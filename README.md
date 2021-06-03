# Teste Laravel

## Instalação

```
composer install

copiar arquivo .env-example para .env e adicionar suas informações

php artisan migrate --seed
Optei a criar seeders pôs no teste só é pedido que crie o metodo para buscar a lista de pessoas e uma unica pessoa, então criei 2 usuário pra ter dados a serem buscados.
```

### endpoints

```
/pessoas - Pega a lista de pessoas
/pessoa/id - pega uma unica pessoa
```
