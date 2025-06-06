FROM php:8.3-apache

RUN apt-get update && apt-get upgrade -y
RUN apt-get install -y libpq-dev
RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo pdo_mysql

EXPOSE 80