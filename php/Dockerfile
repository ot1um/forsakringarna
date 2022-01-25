FROM php:7.1.33-fpm-alpine3.9
RUN apk add freetype libpng libjpeg-turbo freetype-dev libpng-dev libjpeg-turbo-dev
RUN docker-php-ext-configure gd \
     --with-gd \
     --with-freetype-dir=/usr/include/ \
     --with-png-dir=/usr/include/ \
     --with-jpeg-dir=/usr/include/
RUN docker-php-ext-install pdo pdo_mysql gd
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer