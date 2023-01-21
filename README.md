# Symfony Template

## Installation
## Start with Docker
### 1. Installation
```
docker-compose build
docker-compose up -d
```
### 2. Install node_modules/
```
# Run Terminal in service "php"

cd /var/www/symfony
yarn install
yarn run dev
```
## Start with Vagrant
### 1. Installation
```
composer install
vagrant up
```
### 2. Install node_modules/
```
# on vagrant via $vagrant ssh

cd /home/vagrant/symfony/template/symfony
yarn install
yarn run dev
```

### Change Database Host in ``symfony/.env`` File
```
# old
DATABASE_URL="mysql://homestead:secret@db/symfony-template?serverVersion=5.7"

# new
DATABASE_URL="mysql://homestead:secret@127.0.0.1:3306/symfony-template?serverVersion=5.7"
```

## symfony/var Directory
If the enviroment is "dev", maybe u have to change the root directory of the cache and log directory
```
# symfony/src/Kernel.php
...
const ENV_DEV_DIR = '/tmp/symfony' <-- change Root Directory (optional)
...
```

## Git Hook pre_commit
This hook runs the php-cs-fixer command
```
scripts/git/hooks/pre_commit
```

## Commands
```
composer run phpcs
composer run phpcbf
composer run php-cs-fixer

# Runs phpcs & php-cs-fixer
composer run tools 
```

## Custom Branches
Checkout custom branches
### EasyAdmin
[Documentation (easycorp/easyadmin-bundle)](https://symfony.com/bundles/EasyAdminBundle/current/index.html)
```
git checkout with/easyadmin
```

## Requirements
- Vagrant 2.3.4
- VirtualBox 6.1
- PHP 8.1.10
- Composer 2.2.1
