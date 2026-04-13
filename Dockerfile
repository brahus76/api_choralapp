FROM php:8.3-fpm

# Installation des dépendances système
RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev zip unzip libpq-dev

# Installation des extensions PHP (y compris pour PostgreSQL)
RUN docker-php-ext-install pdo pdo_pgsql mbstring exif pcntl bcmath gd

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copie du projet
WORKDIR /var/www
COPY . .

# Installation des dépendances Laravel
RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs

# Permissions pour Laravel
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Commande de démarrage
# On demande à PHP de lancer la migration, puis de démarrer le serveur
# Remplace la dernière ligne par celle-ci
CMD php artisan route:clear && php artisan config:clear && php artisan serve --host=0.0.0.0 --port=8000