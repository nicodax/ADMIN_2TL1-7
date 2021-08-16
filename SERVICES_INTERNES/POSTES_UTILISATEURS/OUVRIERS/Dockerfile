  
FROM ubuntu:bionic

RUN apt-get update && apt-get install -y 
RUN apt-get install -y dnsutils net-tools iputils-ping
RUN apt-get install -y curl elinks
RUN apt-get install vim -y

RUN useradd -ms /bin/bash ouvrier

USER ouvrier

CMD tail -f /dev/null