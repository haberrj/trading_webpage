FROM php:7.2-apache

LABEL maintainer="Ron Haber"

RUN apt-get update
RUN apt-get install -y git python-dev nano

RUN mkdir /database_files/
RUN mkdir /scripts

ADD Backend /

RUN chmod +x /web_files/Backend/python/create_relevant_database.sh

COPY /Frontend /var/www/html/
WORKDIR /scripts/

ENTRYPOINT [ "create_relevant_database.sh" ]