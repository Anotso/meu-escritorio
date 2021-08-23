FROM composer:latest AS composer

FROM php:8.0.9-apache
RUN apt-get update && apt-get install -y \
        unzip \
        git \
        zip \
        nano \
        curl \
        zlib1g-dev \
        libzip-dev \
        libxml2-dev \
        libpng-dev \
        gnupg2 \
    && docker-php-ext-install -j$(nproc) zip sockets pdo pdo_mysql mysqli dom gd

COPY --from=composer /usr/bin/composer /usr/bin/composer
WORKDIR /var/www
RUN a2enmod rewrite

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf