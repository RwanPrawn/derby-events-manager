FROM php:7.2.3-fpm-alpine

COPY docker/php/repositories /etc/apk/repositories
RUN apk add --no-cache musl=1.1.18-r3 git bash openssl openssh autoconf g++ make pcre-dev libpng-dev libjpeg-turbo-dev freetype-dev busybox-suid icu-dev mysql-client

RUN docker-php-ext-install pdo_mysql fileinfo gd
RUN pecl install apcu-5.1.8
RUN docker-php-ext-enable apcu

RUN apk add --no-cache composer@edge_community

WORKDIR /usr/src/app
COPY docker/php/php.ini /usr/local/etc/php/conf.d/custom.ini

COPY apps/api $WORKDIR

RUN php -d memory_limit=1024M $(command -v composer) global require hirak/prestissimo
RUN php -d memory_limit=1024M $(command -v composer) install


RUN chown www-data -R /usr/src/app

CMD php -d memory_limit=1024M $(command -v composer) install --prefer-dist --no-progress --optimize-autoloader \
    && php-fpm
