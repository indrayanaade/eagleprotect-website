FROM php:8.3-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    curl \
    nano \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libzip-dev \
    libicu-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install intl \
    && docker-php-ext-install gd mbstring zip opcache pdo pdo_mysql mysqli \
    && apt-get clean && rm -rf /var/lib/apt/lists/*
# Enable Apache modules
RUN a2enmod rewrite
RUN a2enmod headers

# Set PHP version
RUN php -v

RUN echo "memory_limit = 512M" > /usr/local/etc/php/conf.d/memory.ini

# Set working directory
WORKDIR /var/www/html

# Expose port 80
EXPOSE 80

# Start Apache in foreground
CMD ["apache2-foreground"]