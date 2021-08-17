# Import mysql:5 image from Dockerhub 
FROM mysql:5

# Secure the DB access
# NEEDS TO BE DONE MANUALLY: CAUSES ERROR 
#       (Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock')
# RUN mysql -u root -proot
# RUN GRANT CREATE, SELECT, INSERT, UPDATE on * . * TO admin;
# RUN DELETE FROM mysql.user WHERE User = 'root' AND Host = '%';
# RUN FLUSH PRIVILEGES;