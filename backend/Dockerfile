# backend/Dockerfile
FROM php:7.4-cli

# Set working directory
WORKDIR /var/www/html

# Copy the PHP script into the container
COPY . .

# Expose port 9000 for PHP-FPM (not used here but good practice)
EXPOSE 9000

# Start PHP built-in server
CMD ["php", "-S", "0.0.0.0:9000"]