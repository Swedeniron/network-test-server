FROM php:7.2-apache
ARG VERSION="0.1.0"

MAINTAINER Stellan Eriksson <micro_se@hotmail.com>

LABEL name="network-test" \
      maintainer="micro_se@hotmail.com" \
      vendor="Swedlab" \
      version=$VERSION \
      summary="Network-tester - Docker pod with a simple webserver for network testing writen to Tele2." \
      description="Network-tester is an php:7.2-apache container that allows developers, operations, and security teams to discover, and analyze network conectivity in the cloud."


# Default values overrideable at runtime of the container
ENV SERVICE_PORT=80

# Perform OS setup
RUN set -ex && \
    echo "installing OS dependencies" && \
    apt-get update -y && \
    apt-get upgrade -y && \
    apt-get install -y curl && \
    apt-get install -y traceroute && \
    apt-get install -y iputils-ping && \
    apt-get install -y telnet


# Container runtime instructions
EXPOSE ${SERVICE_PORT}

COPY . /src/app/ /var/www/html/
RUN chown -R www-data:www-data /var/www/html/

USER www-data:www-data 
RUN a2enmod rewrite
