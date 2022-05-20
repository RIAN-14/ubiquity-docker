# ubiquity-docker
Docker-compose structure for php and Ubiquity framework

## Prerequisites

You will need the following things properly installed on your computer.

* Docker `>= 20.10`
* Docker-compose `>=1.29`

## Installation
```
git clone https://github.com/phpMv/ubiquity-docker
cd ubiquity-docker
```

copy env-example to .env:
```
cp env-example .env
```

## Configuration
### General
- PHP, Mysql, Apache and NginX versions are defined in `.env` file.
### Apache
- Apache virtualhost config file is located in `apache/demo.apache.conf`
- The default root of the web server is accessible locally from the `projects/www/public` folder

### Mysql
- You can place your database creation scripts in the `mysql/sql` folder.
- They will be automatically executed at the first build.
- The created databases are accessible on the local computer from the `mysql/db` folder.

## Running

Running Apache (with mysql, php, phpmyadmin):
```
docker-compose up -d apache
```

Running with a rebuild:
```
docker-compose up -d --build apache
```

Opening a bash console:
```
docker exec -ti ubiquity-docker_php_1 /bin/bash
```

Stopping
```
docker-compose down
```
### Frameworks

Creating a new Ubiquity project:
```
docker-compose exec php composer create-project phpmv/ubiquity-project www
```

Running a composer command in www folder:
```
docker-compose exec php/www composer update
```

## Accessing

Http service (Apache or NginX):
```
http://127.0.0.1:8080
```

PhpMyAdmin:
```
http://127.0.0.1:8099
```
