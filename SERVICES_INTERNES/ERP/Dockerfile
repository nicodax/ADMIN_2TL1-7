# Import official PHP Apache Server image
FROM php:8.0-apache

# Update the ubuntu image
RUN apt-get update && apt-get upgrade -y

# Copy the configuration file to the ubuntu image
COPY ./config/vhost.conf /etc/apache2/sites-available/000-default.conf

# Install and enable mysqli
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Open the port 80 to trafic
EXPOSE 80