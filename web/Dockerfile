FROM php:7.0-apache

RUN apt-get update && apt-get install -y

# MySQL
RUN apt-get install -y mysql-client libmysqlclient-dev && docker-php-ext-install mysqli

COPY src/ /var/www/html/