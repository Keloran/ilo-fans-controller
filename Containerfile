FROM php:7.4.33-apache-bullseye

COPY config.inc.php /var/www/html/
COPY index.php /var/www/html/

RUN apt update
RUN apt install libssh2-1-dev libssh2-1 -y
RUN pecl install ssh2-1.2
RUN docker-php-ext-enable ssh2

EXPOSE 80
