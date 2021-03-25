<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>
Require PHP 7.2.5
Update for Laravel version 7x

config init
Step 1:
git clone https://github.com/diogo-foze/laravel-7-crud-using-ajax
cd laravel-7-crud-using-ajax

Step 2: 
Configure database in .env file

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_book
DB_USERNAME=root
DB_PASSWORD=root@123

Step 3:
php artisan migrate 

Step 4:
php artisan serve 

Step 5: 
http://127.0.0.1:8000/books



