FROM php:8.1-cli-alpine

RUN apk add --no-cache \
      git \
      unzip \
      curl \
      icu-dev \
      libzip-dev \
      oniguruma-dev \
      nodejs \
      npm \
  && docker-php-ext-install intl zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
