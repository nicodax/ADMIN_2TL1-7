#!/bin/bash
########################################
#
# CircleCi CI/CD script
#
# Put this on a Server
# run chmod +x deploy_app.sh to make the script executable
#
########################################

# Set Present Working Directory
cd /home/ubuntu/ADMIN_2TL1-7/

# Stop docker-compose execution
docker-compose down

# Update GitHub Repository
git pull

# Restart docker-compose execution
docker-compose up -d