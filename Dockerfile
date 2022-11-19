FROM php:8.1-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

COPY . .

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# install the libraries
RUN composer install

# execute
#CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]

# generate key
RUN touch database/database.sqlite && \
	php artisan key:generate && \
	php artisan migrate --seed

# Expose port 9000 and start php-fpm server
EXPOSE 8000
#CMD ["php-fpm"]
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
