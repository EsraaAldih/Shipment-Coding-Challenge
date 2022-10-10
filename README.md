<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Setup Laravel project after cloning
<ul>
<li>  run <h6> composer install </h6>composer install to generate depedencies in vendor folder
</li>
<li> change <h6>.env.example</h6> to <h6>.env</h6> OR Run <h6> cp .env.example .env </h6>
</li>
<li> run <h6>php artisan key:generate </h6>
</li>
<li> In the .env file, add database information to allow Laravel to connect to the database
</li>
<li> run <h6>php artisan migrate </h6>
</li>
<li> run <h6>php artisan db:seed </h6>
</li>
<li> run <h6>php artisan serve </h6></li>
</ul>