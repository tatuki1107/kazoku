FROM php:8.2-fpm

# basic deps
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpng-dev libjpeg-dev libfreetype6-dev \
    libonig-dev libxml2-dev wget procps libicu-dev \
    && rm -rf /var/lib/apt/lists/*

# PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd intl zip

# composer (from official composer image)
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# node/yarn は node コンテナで行う（開発分離のため）
WORKDIR /var/www/html

# create www-data user permissions convenience
RUN usermod -u 1000 www-data || true

# expose (php-fpm default)
EXPOSE 9000

# Entrypoint: keep default php-fpm entry; no override
