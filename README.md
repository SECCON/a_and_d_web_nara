# Vulnerable Web App for Attack and Defense
This web app was used at https://attack-and-defense.doorkeeper.jp/events/30847.

## Required

- PHP 5.4
- MySQL
- composer
- compass

## Setup

create database user and database. default setting is adweb2/adweb2.
then modify fuel/app/config/db.php.

``` shell
$ git clone --recursive git@github.com:SECCON/a_and_d_web_nara.git
$ composer install
$ php oil r migrate
```

## Create Admin User

``` shell
$ php oil r user:createAdmin admin@example.com password
```
