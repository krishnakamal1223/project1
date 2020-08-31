FROM mysql
ENV MYSQL_DATABASE hybrid
COPY ./tables.sql /docker-entrypoint-initdb.d/
COPY ./values.sql /docker-entrypoint-initdb.d/


