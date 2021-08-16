  
FROM ubuntu:bionic

RUN apt-get update && apt-get upgrade -y

RUN apt-get install -y bind9
RUN apt-get install -y dnsutils
RUN apt-get install -y bind9utils
RUN apt-get install -y bind9-doc

COPY conf/named.conf /etc/bind/named.conf

EXPOSE 53/udp
EXPOSE 53/tcp

CMD named -g