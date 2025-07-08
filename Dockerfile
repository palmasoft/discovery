FROM php:7.4-fpm

# Instalación de dependencias del sistema
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim unzip git curl \
    libxml2-dev \
    libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql zip exif pcntl gd


# Instala Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Directorio de trabajo
WORKDIR /var/www

# Copiar archivos del proyecto
COPY . .

# Limpiar vendor y lock (opcional, útil si hay errores previos)
RUN rm -rf vendor composer.lock

# Instalar dependencias PHP
RUN composer install --no-interaction --prefer-dist

# Asignar permisos
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www
