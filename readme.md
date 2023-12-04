## Prerequisite

This application is developed in laravel and **Adminyzen** panel is used to manage content of this application. Here are the prerequisite of this application.
- PHP 8.1
- MySQL
- Composer
- Redis (Not medetory. But if installed use it for laravel session)

## Permission

- cd /path/to/your/project
- sudo chown -R $USER:www-data .
- sudo find . -type f -exec chmod 664 {} \\; 
- sudo find . -type d -exec chmod 775 {} \\;
- sudo chgrp -R www-data storage bootstrap/cache public/uploads database
- sudo chmod -R ug+rwx storage bootstrap/cache public/uploads database

## Credential Update

Create a **.env** file from **.env.example** file. Update your mysql credential. Change SESSION_DRIVER as redis if redis is installed.

## Database upload
 - **php artisan migrate:refresh --seed** : Run this command to load database with required data
 - **php artisan export:tables** :Custome command to export some of the important tables

## Command to Execute

Here are some command that need to be execute to run the application
- php artisan key:generate
- composer install


## Admin Access
Go to this url - **site_url/dashboard**
- superadmin@analyzenbd.com - **123456**
- admin@analyzenbd.com - **123456**
