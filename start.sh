#!/bin/bash

# Create database directory if it doesn't exist
mkdir -p /app/database

# Create SQLite database file if it doesn't exist
touch /app/database/database.sqlite

# Set permissions
chmod 775 /app/storage -R
chmod 775 /app/bootstrap/cache -R
chmod 664 /app/database/database.sqlite

# Generate app key if not exists
php artisan key:generate --force

# Run migrations
php artisan migrate --force

# Cache config for production
php artisan config:cache
php artisan route:cache  
php artisan view:cache

# Start the server
exec php artisan serve --host=0.0.0.0 --port=${PORT:-8000}