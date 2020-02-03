# Introduction
- Application use Symfony and MySQL manager User data

## Required

- Computer with system is Window, Mac or Ubuntu.
- Install PHP 7.2.5 or higher and these PHP extension.
- [Install Composer](https://getcomposer.org/download/), which is used to install PHP packages.
- [Install Symfony](https://symfony.com/download) which creates in your computer a binary called symfony that provides all the tools you need to develop your application locally.
- Install Apache and MySQL with: (only one)
    - [Xampp](https://www.apachefriends.org/download.html) (Includes: Apache 2.4.41, MariaDB 10.4.11, PHP 7.2.26, phpMyAdmin 5.0.0) 
    - [Wampp](http://www.wampserver.com/en/#download-wrapper) (Includes: Apache 2.4.41 – PHP 5.6.40, 7.3.12, 7.4.0 – MariaDB 10.4.10|10.3.20 – PhpMyAdmin 4.9.2)

## Technical
- [Symfony 5.0.3 or higher](https://symfony.com/)
- [Install MySQL 10.1.35](https://www.mysql.com/)

## Setup and run project

- Clone project from github
```bash
git clone https://github.com/thuanntq/symfony-test.git
```

- Open file `.env`, find line `DATABASE_URL=mysql://root:@127.0.0.1:3306/symfony_test?serverVersion=5.7` and replace with your information (`username`, `password`, `db_name`)
default is:
    - username: root
    - password: null
    - db_name: symfony_test
    
- Move to project folder
```bash
cd symfony_test
```

- Run install package with composer
```bash
composer install 
```

- create migrations file
```bash
php bin/console make:migration
```

- Create database, but first your sure mysql is running
```bash
php bin/console doctrine:migrations:create
```

- Run migrate
```bash
php bin/console doctrine:migrations:migrate 
```
