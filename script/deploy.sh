#!/usr/bin/env bash

php artisan migrate

if [[ $? != 0 ]]; then
    echo "failed to migrate"
    echo 
    php artisan migrate
fi

php artisan db:seed