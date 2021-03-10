FROM php:7.3-fpm
RUN apt-get update -y && apt-get install -y libmcrypt-dev openssl && pecl install mcrypt-1.0.2 && docker-php-ext-enable mcrypt
RUN docker-php-ext-install pdo mbstring
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /var/www
COPY . /var/www
RUN composer install
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www
ADD . /var/www
RUN chown -R www-data:www-data /var/www
USER www
EXPOSE 9000