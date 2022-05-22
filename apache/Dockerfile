FROM ubuntu:22.04

RUN apt update \
  && apt install -y apache2

COPY index.html /var/www/html/

CMD ["apachectl", "-D", "FOREGROUND"]
