FROM php:5.6-apache

RUN docker-php-ext-install mysql mysqli

RUN apt-get update -y && apt-get install -y sendmail libpng-dev

RUN apt-get update && \
    apt-get install -y \
        zlib1g-dev 

RUN docker-php-ext-install mbstring

RUN docker-php-ext-install zip

RUN docker-php-ext-install gd

USER www-data

## Cleanout previous dev just in case
RUN rm -rf /var/www/site/*

ADD --chown=www-data:www-data . /var/www/site

WORKDIR /var/www/site

RUN composer install --no-ansi --no-suggest --no-scripts --prefer-dist --no-progress --no-interaction \
      --optimize-autoloader

RUN composer require "ext-gd:*" --ignore-platform-reqs
RUN composer require league/flysystem-aws-s3-v3

USER root

RUN find /usr/share/GeoIP -not -user www-data -execdir chown "www-data:" {} \+ && \
    find /var/www/site -not -user www-data -execdir chown "www-data:" {} \+

#HEALTHCHECK \
#  --interval=30s \
#  --timeout=60s \
#  --retries=10 \
#  --start-period=60s \
#  CMD if [[ "$(curl -f http://127.0.0.1/ | jq -e . >/dev/null 2>&1)" != "0" ]]; then exit 1; else exit 0; fi
