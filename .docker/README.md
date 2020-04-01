# Docker

Add to `~/.bashrc`

```shell script
export DOCKER_USER_UID=$(id -u)
export DOCKER_USER_GID=$(id -g)
```

```shell script
$ cp .env.example .env

$ chmod -R 777 storage/logs
```

```shell script
$ docker-compose up -d --build
```

```shell script
$ docker-compose exec app bash

$ php artisan key:generate
$ php artisan migrate
$ php artisan db:seed --class=DevDatabaseSeeder
```
