FROM ubuntu:latest
MAINTAINER crifosu

RUN apt-get update \
    && apt-get install -y php7.0-cli \
    && apt-get install -y curl \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/bin/composer