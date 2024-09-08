FROM php:fpm

# Install PDO MySQL extension
RUN docker-php-ext-install pdo pdo_mysql
