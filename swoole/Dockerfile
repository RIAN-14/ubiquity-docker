ARG SWOOLE_VERSION

FROM phpswoole/swoole:${SWOOLE_VERSION}

RUN docker-php-ext-install mysqli pdo_mysql pcntl

WORKDIR "/var/www/html/www"

CMD ["vendor/bin/Ubiquity","serve -t=swoole -p=8095 -h=0.0.0.0"]