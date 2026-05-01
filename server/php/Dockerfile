FROM php:8.1-fpm-alpine

RUN apk add --no-cache \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    libzip-dev \
    zip unzip git

RUN docker-php-ext-configure gd \
    --with-freetype \
    --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql gd zip

# Opcache
RUN docker-php-ext-enable opcache

COPY php.ini /usr/local/etc/php/php.ini

WORKDIR /var/www/html