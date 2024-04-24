# RSS Assignment

This project comprises two main Laravel applications: one for the web and another for the admin panel. We utilize Laravel Folio for the web application and FilamentPHP for the admin panel.

## Installation

* Access and Create database

```
mysql -u root -p
```
_In the database_
```
create database rss_assignment;
```   
  
* Clone application
```
git clone git@github.com:AdiechaHK/rss-assignment.git
```

### Admin

* Go to admin app
```
cd rss-assignment/admin
```
* Copy environment
```
cp .env.example .env
```
* Make sure all environment varibale is correct (specially database details)

* Create database tables
```
php artisan migrate --seed
```
* Install composer dependancies
```
composer install
```
* Serve
```
php artisan serve --port=9090
```

_**Note - Now you can login with following credentials**_

URL: [http://localhost:9090](http://localhost:9090)
```
email: adiechahari@gmail.com
password: 123123
```

### Web

* Go to web app
```
cd ../web
```
* Copy environment
```
cp .env.example .env
```
* Make sure all environment varibale is correct (specially database details)

* Install composer dependancies
```
composer install
```
* Serve
```
php artisan serve --port=9091
```

URL: [http://localhost:9091/categories](http://localhost:9091/categories)

