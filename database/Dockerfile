FROM mysql:5.7

WORKDIR /docker-entrypoint-initdb.d

ENV MYSQL_ROOT_PASSWORD=senha123

ENV MYSQL_DATABASE=systemclient
 
ADD sql.sql /docker-entrypoint-initdb.d

EXPOSE 3306