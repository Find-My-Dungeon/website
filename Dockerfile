FROM php:apache

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y

RUN a2enmod rewrite

WORKDIR /var/www/html
EXPOSE 80