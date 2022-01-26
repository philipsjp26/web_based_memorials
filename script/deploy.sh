#!/usr/bin/env bash

composer install
php artisan migrate

if [[ $? != 0 ]]; then
    echo "failed to migrate"
    echo 
    php artisan migrate
fi
php artisan db:seed
php artisan optimize