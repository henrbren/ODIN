FROM haakco/stage3-ubuntu-20.04-php8

USER www-data

## Cleanout previous dev just in case
RUN rm -rf /var/www/site/*

ADD --chown=www-data:www-data . /var/www/site

WORKDIR /var/www/site

RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd

RUN composer require "ext-gd:*" --ignore-platform-reqs
RUN composer require league/flysystem-aws-s3-v3


RUN composer install --no-ansi --no-suggest --no-scripts --prefer-dist --no-progress --no-interaction \
      --optimize-autoloader


USER root

RUN find /usr/share/GeoIP -not -user www-data -execdir chown "www-data:" {} \+ && \
    find /var/www/site -not -user www-data -execdir chown "www-data:" {} \+

#HEALTHCHECK \
#  --interval=30s \
#  --timeout=60s \
#  --retries=10 \
#  --start-period=60s \
#  CMD if [[ "$(curl -f http://127.0.0.1/ | jq -e . >/dev/null 2>&1)" != "0" ]]; then exit 1; else exit 0; fi
