FROM nginx-php:latest

WORKDIR /data

# Setup the storage, application folder & Tune the permission
RUN \ 
    mkdir -p /data/storage && \
    chown -R nginx:nginx /data/storage && \
    mkdir -p /data/www/opencart && \
    chown -R nginx:nginx /data/www/opencart

# Put the source code 
COPY --chown=nginx:nginx admin/ /data/www/opencart/admin/
COPY --chown=nginx:nginx catalog/ /data/www/opencart/catalog/
COPY --chown=nginx:nginx image/ /data/www/opencart/image/
COPY --chown=nginx:nginx system/ /data/www/opencart/system/
COPY --chown=nginx:nginx index.php /data/www/opencart/
COPY --chown=nginx:nginx LICENSE /data/www/opencart/
COPY --chown=nginx:nginx system/storage/ /data/storage/

# Update the configuration file
COPY --chown=nginx:nginx deployment/config.php /data/www/opencart/config.php
COPY --chown=nginx:nginx deployment/admin-config.php /data/www/opencart/admin/config.php
