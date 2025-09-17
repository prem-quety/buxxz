FROM php:8.2-fpm

# Install the MySQL PDO driver
RUN docker-php-ext-install pdo pdo_mysql

# Optional: have composer available in the container
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
