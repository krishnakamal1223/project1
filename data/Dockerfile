FROM mysql
ENV MYSQL_DATABASE hybrid
COPY ./table.sql /docker-entrypoint-initdb.d/
COPY ./values.sql /docker-entrypoint-initdb.d/


