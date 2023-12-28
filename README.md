

### Passo a passo
Clone Repositório
```sh
git clone https://github.com/celsojunior87/spassu
```
```sh
cd my-project/
```

Crie o Arquivo .env
```sh
cp .env.example .env
```
Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME="Especializa Ti"
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acesse o container app com o bash
```sh
docker-compose exec app bash
```


Instale as dependências do projeto
```sh
composer install
php artisan migrate:fresh --seed
```


Gere a key do projeto Laravel
```sh
php artisan key:generate
```

Instalar o NPM
```sh
NPM INSTALL
```
Acesse o projeto
[http://localhost:8989](http://localhost:8989)
