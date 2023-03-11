FROM php:7.1-apache


# Increase memory limit for PHP
RUN echo "memory_limit=4G" > /usr/local/etc/php/conf.d/memory-limit.ini

# Install common tools and libraries
RUN apt-get update && apt-get install -y --no-install-recommends \
    curl \
    git \
    zip \
    unzip \
    vim \
    openssl \
    libz-dev \
    libjpeg-dev \
    libmcrypt-dev \
    autoconf \
    file \
    g++ \
    gcc

# Install PHP database modules
RUN docker-php-ext-install pdo  
RUN docker-php-ext-install pdo_mysql 
RUN docker-php-ext-install mysqli

# Install PHP intl module
RUN apt-get update && apt-get install -y libicu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl

# Install PHP Image module and libraries
RUN apt-get update && apt-get install -y \
    libfreetype6-dev libjpeg62-turbo-dev libpng-dev libgd-dev \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd \
    && docker-php-ext-install exif

# Install PHP String module
RUN docker-php-ext-install mbstring

# Enable apache re-write and SSL modules
RUN a2enmod rewrite \
    && a2enmod ssl

# Cleanup
RUN apt-get clean

# Install composer
RUN curl -sS https://getcomposer.org/installer | \
    php -- --install-dir=/usr/local/bin --filename=composer --version=1.10.18


# Install dependencies using Composer
#RUN composer install --no-interaction --no-plugins --no-scripts --prefer-dist

# Set permissions on the application code
RUN chown -R www-data:www-data /var/www/html


# Adding virtual host file
#ADD config/000-default.conf /etc/apache2/sites-enabled/000-default.conf
#COPY config/000-default.conf /etc/apache2/sites-available/000-default.conf

ADD config/000-default.conf /etc/apache2/sites-enabled/000-default.conf
COPY config/php.ini /usr/local/etc/php/conf.d/custom.ini


# Adding custom php configuration file
ADD config/php.ini /usr/local/etc/php/conf.d/custom.ini

# Set working directory
WORKDIR /var/www/html

# Copy the rest of the application code
COPY . /var/www/html
