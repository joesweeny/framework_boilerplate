FROM php:7.1-cli

RUN apt-get update
RUN apt-get install -y \
        libcurl4-gnutls-dev \
        libsqlite3-0 \
        curl

RUN docker-php-ext-install -j$(nproc) \
    pdo_mysql \
    pdo \
    curl \
    json

ADD ./docker/php-cli/php.ini /usr/local/etc/php/php.ini

ADD ./ /opt/

WORKDIR /opt