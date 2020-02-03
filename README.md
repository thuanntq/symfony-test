# Introduction
- Application use Symfony and MySQL manager User data

## Required

- Computer with system is Window, Mac or Ubuntu.
- Install PHP 7.2.5 or higher and these PHP extension.
- Install Composer, which is used to install PHP packages.
- Install Symfony which creates in your computer a binary called symfony that provides all the tools you need to develop your application locally.
- Install MySQL 10.x.xx-MariaDB

## Technical
- Symfony 5.0.3
- Install MySQL 10.1.35

## Setup and run project

- Clone project from github
```bash
git clone https://github.com/ducthuan1202/project-name
```

- Open file `.env`, find line `DATABASE_URL=mysql://root:@127.0.0.1:3306/symfony_v1?serverVersion=5.7` and replace with your information (`username`, `password`, `db_name`)
default is:
    - username: root
    - password: null
    - db_name: symfony_v1
    
- Move to project folder
```bash
cd my_project_name
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
