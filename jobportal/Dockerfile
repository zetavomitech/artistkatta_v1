
# Use official PHP image with Apache
FROM php:7.4-apache

# Install required PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache mod_rewrite for CodeIgniter URLs
RUN a2enmod rewrite

RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Set the working directory
WORKDIR /var/www/html

# Copy the project files into the container
COPY . /var/www/html/jobportal

# Set permissions
RUN chown -R www-data:www-data /var/www/html/jobportal \
    && chmod -R 755 /var/www/html/jobportal

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]