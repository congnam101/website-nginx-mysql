FROM php:8.1-fpm

WORKDIR /var/www/html

COPY ./app /var/www/html

# Cài cả mysqli và pdo_mysql
RUN docker-php-ext-install mysqli pdo pdo_mysql
