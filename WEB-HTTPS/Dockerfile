# https://github.com/enonic-cloud/docker-apache2-letsencrypt
# Import docker image with letsencrypt implemented
FROM enoniccloud/apache2-letsencrypt

COPY apt/sources.list /etc/apt

# Update the ubuntu image
RUN apt-get update && apt-get upgrade -y

# Installation de PHP
RUN apt-get install -y php libapache2-mod-php php-mysql

# SSL
RUN a2enmod headers

# Copy the configuration file to the ubuntu image
COPY myvhost.conf /etc/apache2/sites-enabled/myvhost.conf

