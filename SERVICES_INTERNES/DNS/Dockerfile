FROM ubuntu:bionic

RUN apt-get update && apt-get upgrade -y

RUN apt-get install -y bind9
RUN apt-get install -y dnsutils
RUN apt-get install -y bind9utils
RUN apt-get install -y bind9-doc

COPY conf/named.conf /etc/bind/named.conf

RUN mkdir /etc/bind/master

COPY ./master/woodytoys.interne /etc/bind/master/woodytoys.interne
COPY ./master/10.16.172.in-addr.arpa /etc/bind/master/10.16.172.in-addr.arpa

CMD named -g