FROM php:8.2-cli

WORKDIR /var/www/html

COPY . .

# Expose port 10000 (or whatever port you want)
EXPOSE 10000

# Start PHP's built-in web server
CMD ["php", "-S", "0.0.0.0:10000"]