ARG PHP_VERSION

FROM php:${PHP_VERSION}
RUN apt-get update && apt-get upgrade -yqq > /dev/null
RUN apt-get install -yqq git unzip > /dev/null
RUN apt-get install -yqq libpq-dev > /dev/null

RUN \
    docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd \
    && docker-php-ext-configure mysqli --with-mysqli=mysqlnd \
    && docker-php-ext-install pdo_mysql opcache pgsql pdo_pgsql

COPY conf/opcache.ini /usr/local/etc/php/conf.d/opcache.ini


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
