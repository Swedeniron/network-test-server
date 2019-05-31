FROM php:7.2-apache
Maintainer Stellan Eriksson <micro_se@hotmail.com>

RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get install -y curl
RUN apt-get install -y traceroute
RUN apt-get install -y iputils-ping
RUN apt-get install -y telnet

COPY . /src/app/ /var/www/html/

RUN chown -R www-data:www-data /var/www/html/
RUN a2enmod rewrite
