# Import Ubuntu 18.04 image from Dockerhub
FROM ubuntu:bionic

# Update the ubuntu image
RUN apt-get update && apt-get upgrade -y

# Install the needed dependencies to run a BIND9 server
RUN apt-get install -y bind9
RUN apt-get install -y dnsutils
RUN apt-get install -y bind9utils
RUN apt-get install -y bind9-doc

# Copy the configuration file to the ubuntu image
COPY conf/named.conf /etc/bind/named.conf

# Copy the zone files to the ubuntu image
RUN mkdir /etc/bind/master
COPY ./master/woodytoys.interne /etc/bind/master/woodytoys.interne
COPY ./master/10.16.172.in-addr.arpa /etc/bind/master/10.16.172.in-addr.arpa

# Open the port 53 to UDP and TCP trafic
EXPOSE 53/udp
EXPOSE 53/tcp

# Start the BIND9 DNS Server
CMD named -g