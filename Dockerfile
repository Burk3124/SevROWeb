FROM php:8.3-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    nodejs \
    npm \
    sqlite3

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql pdo_sqlite mbstring exif pcntl bcmath gd zip

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy existing application directory contents
COPY . /app

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Install npm dependencies and build assets
RUN npm ci && npm run build

# Create SQLite database file
RUN mkdir -p /app/database && touch /app/database/database.sqlite

# Set permissions
RUN chmod -R 775 /app/storage /app/bootstrap/cache
RUN chmod 664 /app/database/database.sqlite

# Generate application key and run migrations
RUN php artisan key:generate --force
RUN php artisan migrate --force
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

EXPOSE $PORT

CMD php artisan serve --host=0.0.0.0 --port=$PORT