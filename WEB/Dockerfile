# Import official PHP Apache Server image
FROM php:8.0-apache

#custom config
COPY ./config/vhost.conf /etc/apache2/sites-available/000-default.conf
# Install and enable mysqli :
#   mysqli is a PHP extension that conects the PHP Apache Server to the MySQL Server
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
# Update & Upgrade for safety
RUN apt-get update && apt-get upgrade -y