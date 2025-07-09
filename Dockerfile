FROM php:8.1-fpm
WORKDIR /var/www/html
COPY ./app /var/www/html
RUN docker-php-ext-install mysqli
