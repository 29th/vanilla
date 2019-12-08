FROM php:5.5.38-apache

# Configure apache
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf \
  && a2enmod rewrite

# Enable php mysql extension
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy application files
COPY . /var/www/html
WORKDIR /var/www/html

# Configure vanilla and set file permissions
RUN cp conf/config.sample.php conf/config.php \
  && sed -i conf/config.php \
      -e "s,\$Configuration\['Database'\]\['Host'\] = '.*',\$Configuration\['Database'\]\['Host'\] = getenv('DB_HOSTNAME')," \
      -e "s,\$Configuration\['Database'\]\['Name'\] = '.*',\$Configuration\['Database'\]\['Name'\] = getenv('DB_DATABASE')," \
      -e "s,\$Configuration\['Database'\]\['User'\] = '.*',\$Configuration\['Database'\]\['User'\] = getenv('DB_USERNAME')," \
      -e "s,\$Configuration\['Database'\]\['Password'\] = '.*',\$Configuration\['Database'\]\['Password'\] = getenv('DB_PASSWORD')," \
      -e "s,\$Configuration\['Debug'\] = FALSE,\$Configuration\['Debug'\] = getenv('ENVIRONMENT') == 'development'," \
      -e "s,\$Configuration\['Garden'\]\['Cookie'\]\['Salt'\] = '.*',\$Configuration\['Garden'\]\['Cookie'\]\['Salt'\] = getenv('VANILLA_COOKIE_SALT')," \
      # Going through the installation process appears to be necessary (some kind of DB upgrade)
      # -e "s,\$Configuration\['Garden'\]\['Installed'\] = FALSE,\$Configuration\['Garden'\]\['Installed'\] = TRUE," \
  && chmod -R 777 conf cache uploads
