# Use the official PHP image from Docker Hub
FROM php:8.2-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the website files from your local machine into the container
COPY . /var/www/html/

# Expose the port the container will run on
EXPOSE 80

# Run Apache in the foreground
CMD ["apache2-foreground"]