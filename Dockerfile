FROM php:7.2-apache

LABEL maintainer="Ron Haber"

RUN apt-get update
RUN apt-get install -y git python-dev nano

RUN mkdir /database_files/
RUN mkdir /scripts

ADD Backend /scripts/Backend

RUN chmod +x /web_files/Backend/python/create_relevant_database.sh

COPY index.php /var/www/html/
COPY Frontend /var/www/html/Frontend
WORKDIR /scripts/

ENTRYPOINT [ "create_relevant_database.sh" ]