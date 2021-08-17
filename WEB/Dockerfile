# Import official PHP Apache Server image
FROM php:8.0-apache

# Update the ubuntu image
RUN apt-get update && apt-get upgrade -y

# Prepare SSL certificate
RUN apt-get install -y ssl-cert

# Setup Apache2 mod_ssl
RUN a2enmod ssl

# Setup Apache2 HTTPS env
RUN a2ensite default-ssl.conf

# Copy the configuration file to the ubuntu image
COPY ./config/vhost.conf /etc/apache2/sites-available/000-default.conf

# Install and enable mysqli
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Open the ports 80 and 443 to trafic
EXPOSE 80
EXPOSE 443
