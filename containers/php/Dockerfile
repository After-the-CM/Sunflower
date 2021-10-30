FROM php:7-fpm

RUN apt-get update \
  && apt-get install -y zlib1g-dev libzip-dev wget gnupg \
  && docker-php-ext-install zip opcache \
  && docker-php-ext-install pdo_mysql