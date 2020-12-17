FROM php:7.2-apache

LABEL maintainer="Ron Haber"

RUN apt-get update
RUN apt-get install -y cron python3 nano

RUN mkdir /database_files/
RUN mkdir /database_files/Binance
RUN mkdir /scripts

ADD Backend /scripts/Backend

RUN chmod +x /scripts/Backend/python/run_sqlbd.py
# RUN chmod +x /scripts/Backend/python/create_sqlbd.py

COPY index.php /var/www/html/
COPY Frontend /var/www/html/Frontend
WORKDIR /scripts/Backend/python/

ENTRYPOINT ["python3", "./run_sqlbd.py"]
CMD ["/etc/init.d/apache2", "restart"]