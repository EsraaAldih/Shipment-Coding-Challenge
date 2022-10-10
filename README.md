<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Setup Laravel project after cloning
<ul><>
<li>  run <span style="color:Red"> composer install </span">composer install to generate depedencies in vendor folder
</li>
<li> change <span style="color:Red">.env.example</span"> to <span style="color:Red">.env</span"> OR Run <span style="color:Red"> cp .env.example .env </span">
</li>
<li> run <span style="color:Red">php artisan key:generate </span">
</li>
<li> In the .env file, add database information to allow Laravel to connect to the database
</li>
<li> run <span style="color:Red">php artisan migrate </span">
</li>
<li> run <span style="color:Red">php artisan db:seed </span">
</li>
<li> run <span style="color:Red">php artisan serve </span"></li>
