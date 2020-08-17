FROM php:7.4-fpm-alpine
ENV XDEBUG_VERSION 2.9.6
# Update system
RUN set -ex && apk update && apk upgrade --available && apk add --no-cache $PHPIZE_DEPS \
    && pecl install xdebug-${XDEBUG_VERSION} \
    && docker-php-ext-enable xdebug
RUN set -ex && apk del $PHPIZE_DEPS && rm -rf /var/cache/apk/*
