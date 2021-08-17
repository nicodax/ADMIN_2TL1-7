# https://github.com/enonic-cloud/docker-apache2-letsencrypt
# Import docker image with letsencrypt implemented
FROM enoniccloud/apache2-letsencrypt

# Ammends the apt source list to allow apt-get update without error (updated packages in the docker image)
COPY apt/sources.list /etc/apt

# Copy the configuration file to the ubuntu image
COPY ./config/myvhost.conf /etc/apache2/sites-enabled/myvhost.conf

# Copy the websites files to the ubuntu image
COPY ./src/b2b /usr/local/apache2/htdocs/b2b/
COPY ./src/www /usr/local/apache2/htdocs/www/

# Update the ubuntu image
RUN apt-get update && apt-get upgrade -y

# Installation de PHP
RUN apt-get install -y php libapache2-mod-php php-mysql

# SSL
RUN a2enmod headers

# Protect web server's files
RUN useradd webserver
RUN chown -R webserver /etc/apache2/sites-enabled/
RUN chmod -R 555 /etc/apache2/sites-enabled/
RUN chown -R webserver /usr/local/apache2/htdocs/
RUN chmod -R 555 /usr/local/apache2/htdocs/
