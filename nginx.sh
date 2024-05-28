#!/bin/bash

# Remove temporary files
rm -rf /home/container/tmp/*

# Get PHP version
PHP_VERSION=$(cat "/home/container/php_version.txt")

# Start PHP-FPM
echo "[Docker] Starting PHP-FPM"
php-fpm$PHP_VERSION -c /home/container/php/php.ini --fpm-config /home/container/php/php-fpm.conf --daemonize > /dev/null 2>&1

# Extract port from Nginx configuration file
NGINX_CONF="/home/container/nginx/conf.d/default.conf"
PORT=$(grep -oP '(?<=listen )\d+' "$NGINX_CONF" | head -1)

# Ensure the port was extracted successfully
if [ -z "$PORT" ]; then
    echo "Error: Unable to extract port from Nginx configuration file."
    exit 1
fi

# Replace placeholder in README.md with the actual port
README_PATH="/home/container/www/README.md"
TEMP_README_PATH="/home/container/tmp/temp_README.md"
sed "s/{{server.build.default.port}}/$PORT/g" "$README_PATH" > "$TEMP_README_PATH"

# Move the temporary README back to the original location
mv "$TEMP_README_PATH" "$README_PATH"

# Start NGINX
echo "[Docker] Starting NGINX"
echo "[Docker] Services successfully launched"
nginx -c /home/container/nginx/nginx.conf -p /home/container
