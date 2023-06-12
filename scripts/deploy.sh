#!/bin/bash

cd var/www/logic

git pull origin master
composer install --optimize-autoloader --no-dev
php artisan migrate --force --seed
php artisan config:clear
php artisan cache:clear
php artisan optimize:clear
composer dump-autoload