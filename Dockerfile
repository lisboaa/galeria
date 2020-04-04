FROM php:7.4-apache

RUN docker-php-ext-install pdo pdo_mysql
RUN apt-get update --fix-missing
RUN apt-get install -y curl



RUN rewrite headers

WORKDIR /var/www/html