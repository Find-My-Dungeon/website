FROM php:apache

RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo pdo_mysql

RUN a2enmod rewrite

WORKDIR /var/www/html
EXPOSE 80