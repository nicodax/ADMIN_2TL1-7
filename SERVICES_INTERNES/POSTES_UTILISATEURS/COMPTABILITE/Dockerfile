# Import Ubuntu 18.04 image from Dockerhub 
FROM ubuntu:bionic

# Update the ubuntu image
RUN apt-get update && apt-get install -y

# Install dependencies needed to execute ping and dig commands
RUN apt-get install -y dnsutils net-tools iputils-ping

# Install elinks (Terminal Based Web Browser)
RUN apt-get install -y curl elinks

# Install VIM for file edition
RUN apt-get install vim -y

# Create Ubuntu user and create a home repertory for it
RUN useradd -ms /bin/bash comptable

# Connect to the container with the user
USER comptable