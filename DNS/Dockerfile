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
COPY named.conf /etc/bind/
# Copy the zone file to the ubuntu image
COPY db.daxhelet.ovh /etc/bind/zones/

# Open the port 53 to UDP and TCP trafic
EXPOSE 53/udp
EXPOSE 53/tcp

# Start the BIND9 DNS Server
CMD named -g
