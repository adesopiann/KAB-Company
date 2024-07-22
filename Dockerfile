FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
    libssl1.0.0 libssl-dev \
    && docker-php-ext-install pdo pdo_mysql

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80
CMD ["apache2-foreground"]
