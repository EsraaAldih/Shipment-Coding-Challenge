<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Setup Laravel project after cloning
<ul>
<li>  run <bold> composer install </bold"><p>  to  generate depedencies in vendor folder</p>
</li>
<li> change <bold>.env.example</bold"> to <bold>.env</bold"> OR Run <bold> cp .env.example .env </bold">
</li>
<li> run <bold>php artisan key:generate </bold">
</li>
<li> In the .env file, add database information to allow Laravel to connect to the database
</li>
<li> run <bold>php artisan migrate </bold">
</li>
<li> run <bold>php artisan db:seed </bold">
</li>
<li> run <bold>php artisan serve </bold"></li>
