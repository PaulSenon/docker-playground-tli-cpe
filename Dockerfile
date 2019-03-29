FROM php:7.0-apache

# Install 
RUN apt-get update && apt-get install -y libpng-dev curl libcurl4-openssl-dev

# Add PDO extension
RUN docker-php-ext-install pdo_mysql gd

# Apache modules
RUN a2enmod rewrite
RUN service apache2 restart

# Name server
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Copy files
#COPY www/ /var/www/html
#COPY php.ini /usr/local/etc/php/
