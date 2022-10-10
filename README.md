<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Setup Laravel project after cloning

1 : run <h2> composer install </h2>composer install to generate depedencies in vendor folder
2 : change <h2>.env.example</h2> to <h2>.env</h2> OR Run <h2> cp .env.example .env </h2>
3 : run <h2>php artisan key:generate </h2>
4 : In the .env file, add database information to allow Laravel to connect to the database
5 : run <h2>php artisan migrate </h2>
6 : run <h2>php artisan db:seed </h2>
7 : run <h2>php artisan serve </h2>