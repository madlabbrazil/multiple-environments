# multiple-environments


```
docker build -f dockerfiles/Dockerfile-mariadb -t multiple-environments-db . &&
docker run -d --name mlp-database --hostname madlab-me multiple-environments-db

```

Criar o disco de arquivos
```
docker  create --name mlp-website-data --volume /www debian:jessie

```

criar as instancias PHP
```
docker build -f dockerfiles/Dockerfile-php7 -t multiple-environments-php7 . &&
docker build -f dockerfiles/Dockerfile-php5-6 -t multiple-environments-php5-6 . &&
docker build -f dockerfiles/Dockerfile-php5-5 -t multiple-environments-php5-5 . &&
docker  run -d --name mlp-php7 --volumes-from mlp-website-data --link mlp-database multiple-environments-php7 &&
docker  run -d --name mlp-php5-6 --volumes-from mlp-website-data --link mlp-database multiple-environments-php5-6 &&
docker  run -d --name mlp-php5-5 --volumes-from mlp-website-data --link mlp-database multiple-environments-php5-5 &&
docker  run -d --name mlp-hhvm --volumes-from mlp-website-data --link mlp-database diegomarangoni/hhvm:fastcgi

```

```
docker build -f dockerfiles/Dockerfile-nginx -t multiple-environments-nginx . &&
docker run -d --name mlp-nginx --volumes-from mlp-website-data --link mlp-php7 --link mlp-php5-6 --link mlp-php5-5 --link mlp-hhvm -p 80:80  multiple-environments-nginx &&
docker exec mlp-nginx /set_var.sh &&
docker restart mlp-nginx
```

?phpversion=hhvm

To see if you container are build correctly run this command `docker ps`

