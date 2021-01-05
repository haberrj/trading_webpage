FROM php:7.2-apache

LABEL maintainer="Ron Haber"

RUN apt-get update && apt-get install -y nano && mkdir /database_files/
# RUN mkdir /database_files/Binance
# RUN mkdir /scripts

# ADD Backend /scripts/Backend

# RUN chmod +x /scripts/Backend/python/run_sqlbd.py
# RUN chmod +x /scripts/Backend/python/create_sqlbd.py

COPY index.php /var/www/html/
COPY Frontend /var/www/html/Frontend
# WORKDIR /scripts/Backend/python/
WORKDIR /var/www/html/

# ENTRYPOINT ["python3", "./run_sqlbd.py"]