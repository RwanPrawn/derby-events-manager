FROM php:7.2.3-fpm-alpine

COPY docker/php/repositories /etc/apk/repositories
RUN apk add --no-cache git bash openssl openssh mysql-client
RUN apk add --no-cache composer@edge_community

WORKDIR /usr/src/app
COPY docker/php/php.ini /usr/local/etc/php/conf.d/custom.ini

COPY apps/api $WORKDIR

RUN php -d memory_limit=1024M $(command -v composer) global require hirak/prestissimo
RUN php -d memory_limit=1024M $(command -v composer) install


RUN chown www-data -R /usr/src/app

CMD php -d memory_limit=1024M $(command -v composer) install --prefer-dist --no-progress --optimize-autoloader \
    && php-fpm
