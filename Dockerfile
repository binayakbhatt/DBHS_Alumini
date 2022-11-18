FROM devilbox/php-fpm-8.1:latest

COPY . .

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


# install the libraries
RUN composer install --no-dev --no-interaction --optimize-autoloader


# execute
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
