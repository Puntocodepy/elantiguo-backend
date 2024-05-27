FROM php:7.4-apache

# Instalar dependencias requeridas por Laravel
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    curl

# Limpiar la lista de paquetes y el caché
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Habilitar extensiones PHP requeridas por Laravel
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Copiar el directorio del proyecto al contenedor
COPY . /var/www/html

# Configurar permisos y directorio de trabajo
RUN chown -R www-data:www-data /var/www/html
WORKDIR /var/www/html

# Instalar dependencias de Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instalar las dependencias de Composer
RUN composer install --no-interaction --no-scripts --prefer-dist

# Generar una clave de aplicación de Laravel
RUN php artisan key:generate

# Ejecutar las migraciones y los seeders si es necesario
#RUN php artisan migrate --seed

# Configurar el sitio Apache
ADD .docker/vhost.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

# Exponer el puerto 80
EXPOSE 80

# Comando de inicio del contenedor
CMD ["apache2-foreground"]
